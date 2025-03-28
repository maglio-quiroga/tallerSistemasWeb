<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Hamburguesa Responsivo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Estilos del contenedor principal de navegación */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            color: white;
            padding: 1rem 2rem;
            position: relative;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Estilos del menú */
        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 1rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: #ff6f61;
        }

        /* Botón hamburguesa */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            width: 30px;
        }

        .bar {
            height: 3px;
            width: 100%;
            background-color: white;
            margin: 3px 0;
            transition: 0.4s;
        }

        /* Estilos responsivos */
        @media screen and (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background-color: #333;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li {
                margin: 1rem 0;
            }

            /* Animación de las barras del hamburguesa */
            .hamburger.active .bar:nth-child(1) {
                transform: rotate(-45deg) translate(-5px, 6px);
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(3) {
                transform: rotate(45deg) translate(-5px, -6px);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">Mi Sitio Web</div>
        
        <ul class="nav-menu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
        
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>

    <script>
        // Función para manejar la interactividad del menú hamburguesa
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.querySelector('.hamburger');
            const navMenu = document.querySelector('.nav-menu');
            const navLinks = document.querySelectorAll('.nav-menu a');

            // Función para alternar el menú
            function toggleMenu() {
                hamburger.classList.toggle('active');
                navMenu.classList.toggle('active');
            }

            // Evento de clic en el botón hamburguesa
            hamburger.addEventListener('click', toggleMenu);

            // Cerrar menú al hacer clic en un enlace (para móviles)
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    hamburger.classList.remove('active');
                    navMenu.classList.remove('active');
                });
            });

            // Función para manejar cambios de tamaño de ventana
            function handleResize() {
                // Si la ventana es más grande que 768px, asegurarse de que el menú esté visible
                if (window.innerWidth > 768) {
                    navMenu.classList.remove('active');
                    hamburger.classList.remove('active');
                }
            }

            // Evento de cambio de tamaño de ventana
            window.addEventListener('resize', handleResize);

            // Accesibilidad: permitir cerrar con la tecla Escape
            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && navMenu.classList.contains('active')) {
                    toggleMenu();
                }
            });
        });
    </script>
</body>
</html>
