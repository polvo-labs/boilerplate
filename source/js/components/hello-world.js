export default class HelloWorld {
  constructor (selector = '.js-hello-world') {
    const element = document.querySelector(selector)
    element.innerHTML = 'Hello, World!'
  }
}
