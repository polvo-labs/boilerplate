'use strict'

var $ = require('jquery')
var lodash = require('lodash')

var h1 = $('<h1>TESTE BOILERPLATE COM NPM SCRIPTS</h1>')

h1.css('display', 'inline-block')
h1.css('text-align', 'center')
h1.css('color', '#fff')

$('.container').append(h1)

$('body').css('backgroundColor', 'black')
.css('textAlign', 'center')

var sum = require('./teste.js')

console.log(sum(100, 11440))
