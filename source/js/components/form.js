/**
 * Module dependencies.
 */

import $ from 'jquery'
import extractDataOptions from 'extract-data-options'
import customAlert from '../utils/customAlert'
import 'jquery-validation'
import '../localization/validation'

/**
 * Get all `.js-form` elements.
 */

$('.js-form').each(function () {
  createForm($(this))
})

/**
 * Create the form with validations.
 */

export default function createForm ($form, options = {}) {
  const defaults = {
    ajax: false,
    disableButtonOnSubmit: true,
    disabledButtonHTML: 'Processando...'
  }

  const dataOptions = extractDataOptions($form[0], 'form')
  const settings = $.extend({}, defaults, options, dataOptions)
  let pending = false

  const url = $form.attr('action')
  const method = $form.attr('method')
  const $button = $form.find('[type="submit"]')
  const buttonHTML = $button.html()

  $form.validate({
    errorElement: 'span',

    errorPlacement ($error, $input) {
      $error.addClass('ui-error')
      $input.parents('.ui-control').append($error)
    },

    submitHandler (form) {
      if (pending) {
        return
      }

      pending = true

      if (settings.disableButtonOnSubmit) {
        $button.attr('disabled', true).html(settings.disabledButtonHTML)
      }

      if (!settings.ajax) {
        return form.submit()
      }

      const data = $form.serializeArray()

      $.ajax({url, method, data, dataType: 'json'})
        .done(response => {
          feedbackHandler(response)
        })
        .fail(err => {
          feedbackHandler({message: 'Erro ao processar dados!'})
          console.log('ajax error:', err)
        })
        .always(() => {
          if (settings.disableButtonOnSubmit) {
            $button.html(buttonHTML).removeAttr('disabled')
          }

          pending = false
        })
    }
  })
}

/**
 * feedbackHandler
 */

function feedbackHandler (feedback) {
  const type = feedback.success
    ? 'success'
    : 'error'

  const title = feedback.title || ''
  const text = feedback.message

  customAlert({type, title, text})
}
