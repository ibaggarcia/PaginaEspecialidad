
document.querySelector('#cerrar-modal').addEventListener('click', function() {
  document.querySelector('#modalregistro').style.display = 'none';
});

document.querySelector('a[data-target="modalregistro"]').addEventListener('click', function() {
  document.querySelector('#modalregistro').style.display = 'block';
});

$('a[data-target="modalregistro"]').on('click', function() {
  $('#modalregistro').show();
});

$('#close-modal').on('click', function() {
  $('#modalregistro').hide();
});