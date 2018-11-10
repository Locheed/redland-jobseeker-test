function ourownonloadfunction() {
  document.getElementById('cookie-bar').style.display = 'block';

}

function checkIfHome() {
  const body = document.querySelector('body');
  const header = document.querySelector('header');
  const navbarContainer = document.querySelector('.navbar-container');
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

document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.querySelector('.navbar-container');
  const body = document.querySelector('body');
  document.addEventListener('scroll', () => {

    // Toggle navbar background color after window is scrolled enough and has a class of home
    if (body.classList.contains('home')) {
      window.scrollY > window.innerHeight ? navbar.classList.add('navbar-bg') : navbar.classList.remove('navbar-bg');
    }
  });
});



