"use strict";

function ourownonloadfunction() {
  document.getElementById('cookie-bar').style.display = 'block';
}

function checkIfHome() {
  var body = document.querySelector('body');
  var header = document.querySelector('header');
  var navbarContainer = document.querySelector('.navbar-container');
  body.classList.contains('home') ? header.classList.add('fullsize-header') : header.classList.remove('fullsize-header');
  !body.classList.contains('home') ? navbarContainer.classList.add('navbar-bg') : navbarContainer.classList.remove('navbar-bg');
}

function acceptCookie() {
  document.getElementById('cookie-bar').style.display = 'none';
}

function openSideBar() {
  document.querySelector('.navbar-sidemenu').style.width = '250px';
}

function closeSideBar() {
  document.querySelector('.navbar-sidemenu').style.width = '0';
}

window.onload = ourownonloadfunction;
document.addEventListener('DOMContentLoaded', function () {
  var navbar = document.querySelector('.navbar-container');
  document.addEventListener('scroll', function () {
    // Toggle navbar background color after window is scrolled enough
    window.scrollY > window.innerHeight ? navbar.classList.add('navbar-bg') : navbar.classList.remove('navbar-bg');
  });
});