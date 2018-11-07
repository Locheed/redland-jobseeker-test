"use strict";

function ourownonloadfunction() {
  document.getElementById('cookie-bar').style.display = 'block';
}

function checkIfHome() {
  var body = document.querySelector('body');
  var header = document.querySelector('header');
  body.classList.contains('home') ? header.classList.add('fullsize-header') : header.classList.remove('fullsize-header');
}

function acceptCookie() {
  document.getElementById('cookie-bar').style.display = 'none';
}

window.onload = ourownonloadfunction;