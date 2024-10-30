import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

function imprimirTexto(mensaje) {
   alert(mensaje);
}

window.imprimirTexto = imprimirTexto;



// const menuToggle = document.getElementById('menu-toggle');
// const mobileMenu = document.getElementById('mobile-menu');

// menuToggle.addEventListener('click', function () {
//     mobileMenu.classList.toggle('hidden');
// });