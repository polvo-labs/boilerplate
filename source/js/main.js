'use strict'

var $ = require('jquery')
var lodash = require('lodash')

var h1 = $('<h1>TESTE BOILERPLATE COM NPM SCRIPTS</h1>')

h1.css('display', 'inline-block')
h1.css('text-align', 'center')
h1.css('color', '#fff')

$('body').append(h1)

$('body').css('backgroundColor', 'red')
.css('textAlign', 'center')

var sum = require('./teste.js')

console.log(sum(100, 10))
