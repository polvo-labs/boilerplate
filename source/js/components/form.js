/**
 * Module dependencies.
 */

import $ from 'jquery'
import extractDataOptions from 'extract-data-options'
import customAlert from '../utils/customAlert'
import 'jquery-validation'
import '../localization/validation'

/**
 * @class Form
 */

class Form {
  constructor (form, options = {}) {
    const dataOptions = extractDataOptions(form, 'form')

    this.$form = $(form)
    this.options = $.extend({}, Form.defaults, options, dataOptions)
    this.pending = false
    this.$submitButton = this.$form.find('[type="submit"]')
    this.submitButtonHtml = this.$submitButton.html()

    this.addValidations()
  }

  addValidations () {
    this.$form.validate({
      errorElement: 'span',

      errorPlacement ($error, $input) {
        $error.addClass('ui-error')
        $input.parents('.ui-control').append($error)
      },

      submitHandler: this.handleSubmit.bind(this)
    })
  }

  handleSubmit (form) {
    if (this.pending) {
      return
    }

    if (this.options.disableButtonOnSubmit) {
      this.disableSubmitButton()
    }

    this.pending = true

    if (!this.options.ajax) {
      return form.submit()
    }

    this.performAjaxRequest()
  }

  disableSubmitButton () {
    this.$submitButton
      .attr('disabled', true)
      .html(this.options.disabledButtonHtml)
  }

  enableSubmitButton () {
    this.$submitButton
      .removeAttr('disabled')
      .html(this.submitButtonHtml)
  }

  performAjaxRequest () {
    const { feedbackHandler } = this.options
    const url = this.$form.attr('action')
    const method = this.$form.attr('method')
    const data = this.$form.serializeArray()

    $.ajax({
      url,
      method,
      data,
      dataType: 'json'
    })
    .done(feedbackHandler)
    .fail(err => {
      feedbackHandler({message: 'Erro ao enviar dados!'})
    })
    .always(() => {
      this.pending = false

      if (this.options.disableButtonOnSubmit) {
        this.enableSubmitButton()
      }
    })
  }
}

Form.defaults = {
  ajax: false,
  disableButtonOnSubmit: true,
  disabledButtonHtml: 'Processando...',
  feedbackHandler (feedback) {
    const type = feedback.success
    ? 'success'
    : 'error'

    const title = feedback.title || ''
    const text = feedback.message

    customAlert({type, title, text})
  }
}

/**
 * Get all `.js-form` elements.
 */

$('.js-form').each(function () {
  const form = new Form(this)
  $(this).data('form', form)
})
