/*document.querySelector('#cerrar-modal').addEventListener('click', function() {
  document.querySelector('#modalregistro').style.display = 'none';
});

document.querySelector('a[data-target="modalregistro"]').addEventListener('click', function() {
  document.querySelector('#modalregistro').style.display = 'block';
});

$('a[data-target="modalregistro"]').on('click', function() {
  $('#modalregistro').show();
});

$('#close-modal').on('click', function() {
  $('#mi-modal').hide();
});
*/

// Obtener el enlace que abre el modal
var link = document.querySelector('[data-target="modallogin"]');

// Obtener el modal que se abrirá
var modal = document.getElementById(link.getAttribute('data-target'));

// Obtener el botón de cerrar
var close = modal.querySelector('.close');

// Abrir el modal cuando se hace clic en el enlace
link.onclick = function() {
  modal.style.display = "grid";
}

// Cerrar el modal cuando se hace clic en el botón de cerrar
close.onclick = function() {
  modal.style.display = "none";
}

// Cerrar el modal cuando se hace clic fuera de él
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const checkC = document.querySelector("#cliente").addEventListener("click", () => {
  document.querySelector(".checkC").style.display = "inline-block"
  document.querySelector(".checkP").style.display = "none"
  document.querySelector(".circleP").style.display = "inline-block"
  document.querySelector(".circleC").style.display = "none"
})
const checkP = document.querySelector("#proveedor").addEventListener("click", () => {
  document.querySelector(".checkP").style.display = "inline-block"
  document.querySelector(".checkC").style.display = "none"
  document.querySelector(".circleC").style.display = "inline-block"
  document.querySelector(".circleP").style.display = "none"
})

  $(document).ready(function() {
    $('a.desplegar-menu').click(function() {
      $('#menu').toggleClass('oculto');
      return false;
    });
  });

