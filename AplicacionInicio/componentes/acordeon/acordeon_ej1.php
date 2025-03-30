<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <h2>ACLAREMOS TUS DUDAS</h2>
      <div class="faqs">
        <div class="faq">
          <div class="head">
            <span>¿Hacen envíos a todo el mundo?</span>
            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 14.469L1 6.46897L1.96897 5.5L9 12.531L16.031 5.5L17 6.46897L9 14.469Z" fill="black" />
            </svg>

          </div>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              consectetur totam saepe id quae, voluptate, obcaecati temporibus
              alias unde dolore voluptatem aperiam placeat possimus! Labore est
              repudiandae sequi veniam aliquid?
            </p>
          </div>
        </div>
        <div class="faq">
          <div class="head">
            <span>
              ¿En cuantos días llega mi pedido?
            </span>
            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 14.469L1 6.46897L1.96897 5.5L9 12.531L16.031 5.5L17 6.46897L9 14.469Z" fill="black" />
            </svg>

          </div>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              consectetur totam saepe id quae, voluptate, obcaecati temporibus
              alias unde dolore voluptatem aperiam placeat possimus! Labore est
              repudiandae sequi veniam aliquid?
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              consectetur totam saepe id quae, voluptate, obcaecati temporibus
              alias unde dolore voluptatem aperiam placeat possimus! Labore est
              repudiandae sequi veniam aliquid?
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              consectetur totam saepe id quae, voluptate, obcaecati temporibus
              alias unde dolore voluptatem aperiam placeat possimus! Labore est
              repudiandae sequi veniam aliquid?
            </p>
          </div>
        </div>
        <div class="faq">
          <div class="head">
            <span>
              ¿Cómo se manejan las devoluciones?
            </span>
            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9 14.469L1 6.46897L1.96897 5.5L9 12.531L16.031 5.5L17 6.46897L9 14.469Z" fill="black" />
            </svg>

          </div>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
              consectetur totam saepe id quae, voluptate, obcaecati temporibus
              alias unde dolore voluptatem aperiam placeat possimus! Labore est
              repudiandae sequi veniam aliquid?
            </p>
          </div>
        </div>
      </div>
    </div>
    
</body>

<script>
const faqsTitles = document.querySelectorAll(".faq .head");

faqsTitles.forEach((faq) => {
    faq.addEventListener("click", () => {
        faq.parentNode.classList.toggle("active");
        
        const faqContent = faq.nextElementSibling;

        if (faq.parentNode.classList.contains("active")) {
            faqContent.style.height = (faqContent.scrollHeight + 30) + "px";
        } else {
            faqContent.style.height = "0px";
        }
    });
});
</script>

</html>