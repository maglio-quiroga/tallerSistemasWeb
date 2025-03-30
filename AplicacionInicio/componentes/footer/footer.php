<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinos Mágicos</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: #f0f8ff;
            color: #333;
            min-height: 2000px;
        }
        
        .main-content {
            padding: 50px 20px;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        
        h1 {
            color: #026aa7;
        }
        
        /*nuevo footer particulas*/
        .particles-section {
            position: relative;
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #0077b6, #023e8a);
            margin-top: 100px;
            overflow: hidden;
        }
        
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }
        
        .footer-content {
            position: relative;
            z-index: 10;
            color: white;
            text-align: center;
            padding: 50px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        
        .footer-content p {
            margin: 8px 0;
            font-size: 16px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        .social-icons {
            margin-top: 20px;
        }
        
        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 15px;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }
        
        .social-icons a:hover {
            color: #ffcc00;
            transform: translateY(-3px);
        }
        
        /*para arriba*/
        #backToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #ffcc00;
            color: #333;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
            display: none;
            z-index: 100;
        }
        
        #backToTop:hover {
            background: #ffdd44;
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Bienvenido a Destinos Mágicos ✈️🏝️</h1>
        <p>Explora el mundo con nosotros y descubre paraísos escondidos.</p>
    </div>

    <!--nueva seccion mejorada con partis-->
    <div class="particles-section">
        <div id="particles-js"></div>
        <div class="footer-content">
            <p>🌍 Agencia de Viajes - Explora el mundo con nosotros</p>
            <p>📍 Dirección: Av. Paraíso 123, Ciudad del Sol</p>
            <p>📧 Correo: contacto@viajesmagicos.com</p>
            <div class="social-icons">
                <a href="#" target="_blank">📘</a>
                <a href="#" target="_blank">📷</a>
                <a href="#" target="_blank">🐦</a>
            </div>
        </div>
    </div>

    <button id="backToTop">↑</button>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        //configuracion para mejores particulas
        particlesJS("particles-js", {
            particles: {
                number: { value: 80 },
                color: { value: "#ffffff" },    
                shape: { type: "circle" },
                opacity: { value: 0.7 },
                size: { value: 4 },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out"
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "repulse" }
                }
            }
        });

        //boton para arriba
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            backToTop.style.display = window.scrollY > 300 ? 'block' : 'none';
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>