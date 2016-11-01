module.exports = function helloWorld (selector) {
  selector = document.querySelectorAll(selector)
  Array.prototype.slice.call(selector).forEach(create)
}

function create (el) {
  el.innerHTML = 'Hello, World!'
}
