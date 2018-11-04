function ourownonloadfunction() {

  document.getElementById('cookie-bar').style.display = 'block';

}

function acceptCookie() {
  document.getElementById('cookie-bar').style.display = 'none';
}

window.onload = ourownonloadfunction;
