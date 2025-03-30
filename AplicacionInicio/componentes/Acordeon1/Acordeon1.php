<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acordeón</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .accordion {
            width: 100%;
            max-width: 600px;
            margin: auto;
            font-family: Arial, sans-serif;
        }
        .accordion-item {
            margin-bottom: 5px;
            border-radius: 5px;
            overflow: hidden;
            border: 1px solid #ccc;
        }
        .accordion-header {
            background:rgb(104, 119, 134);
            color: white;
            padding: 15px;
            cursor: pointer;
            text-align: left;
            border: none;
            width: 100%;
            outline: none;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .accordion-header::after {
            content: '\25B6'; /* Flecha */
            transition: transform 0.3s ease;
        }
        .accordion-header.active::after {
            transform: rotate(90deg);
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease;
            background: #f1f1f1;
            padding: 0 15px;
        }
        .accordion-content p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="accordion">
        <div class="accordion-item">
            <button class="accordion-header">Sección 1</button>
            <div class="accordion-content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod laboriosam fugit saepe blanditiis, cum nulla! Quia enim est aut sit, modi, officia porro, dolores fugiat ullam quasi voluptatibus eligendi amet..</p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">Sección 2</button>
            <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ex incidunt dignissimos. Quaerat officia dolorem saepe aperiam assumenda eaque temporibus sapiente quos omnis libero deleniti asperiores facilis, ab in explicabo!.</p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-header">Sección 3</button>
            <div class="accordion-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe asperiores nisi consequatur aliquam perspiciatis nihil quisquam qui maxime aliquid voluptate sunt suscipit expedita, eveniet sed commodi molestias modi vitae ad!
                    .</p>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.accordion-header').forEach(button => {
            button.addEventListener('click', function () {
                const isActive = this.classList.contains('active');
                document.querySelectorAll('.accordion-header').forEach(header => {
                    header.classList.remove('active');
                    header.nextElementSibling.style.maxHeight = null;
                    header.nextElementSibling.style.padding = "0 15px";
                });
                if (!isActive) {
                    this.classList.add('active');
                    let content = this.nextElementSibling;
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.padding = "10px 15px";
                }
            });
        });
    </script>
</body>
</html>
