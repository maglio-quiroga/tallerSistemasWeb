
<header class="header">
    <a href="#" class="logo">Logo</a>
    <nav class="navbar">
      <a href="#">Inicio</a>
      <a href="#">Nosotros</a>
    </nav>
    <button class="c-hamburguesa" id="btn-hamburguesa">
      <i class="bi bi-list i-hamburguesa"></i>
    </button>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const btnHamburguesa = document.getElementById('btn-hamburguesa');
      const navbar = document.querySelector('.navbar');

      btnHamburguesa.addEventListener('click', function () {
        navbar.classList.toggle('activo');
      });
    });
  </script>