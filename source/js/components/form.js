/**
 * Module dependencies.
 */

import $ from 'jquery'
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

export default function createForm ($form) {
  $form.validate({
    errorElement: 'span',
    errorPlacement ($error, $input) {
      $error.addClass('ui-error')
      $input.parents('.ui-control').append($error)
    }
  })
}
