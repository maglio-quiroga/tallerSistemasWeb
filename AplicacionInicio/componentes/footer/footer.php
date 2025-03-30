
<div>
    <h1>Bienvenido a Destinos Mágicos ✈️🏝️</h1>
    <p>Explora el mundo con nosotros y descubre paraísos escondidos.</p>

    <footer id="particles-js">
        <div class="footer-content">
            <p>🌍 Agencia de Viajes - Explora el mundo con nosotros</p>
            <p>📍 Dirección: Av. Paraíso 123, Ciudad del Sol</p>
            <p>📧 Correo: contacto@viajesmagicos.com</p>

            <div class="social-icons">
                <a href="#" target="_blank">📘</a> <!--feibu-->
                <a href="#" target="_blank">📷</a> <!--ig-->
                <a href="#" target="_blank">🐦</a> <!--x -->
            </div>

        </div>
    </footer>

    <button id="backToTop">⬆</button>
</div>
    <script>
        //volver arriba
        const backToTopButton = document.getElementById("backToTop");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        });

        backToTopButton.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    </script>
