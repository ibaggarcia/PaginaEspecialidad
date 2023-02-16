document.querySelector('#cerrar-modal').addEventListener('click', function() {
  document.querySelector('#modallogin').style.display = 'none';
});

document.querySelector('a[data-target="modallogin"]').addEventListener('click', function() {
  document.querySelector('#modallogin').style.display = 'block';
});

$('a[data-target="modallogin"]').on('click', function() {
  $('#modallogin').show();
});

$('#close-modal').on('click', function() {
  $('#mi-modal').hide();
});