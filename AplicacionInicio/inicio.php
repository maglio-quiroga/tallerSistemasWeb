<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" > 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            padding: 0;
            margin: 0;
            font-family: "Poppins", sans-serif;
            box-sizing: border-box;
        }
        body {
            background-color: #F4F4F5;
        }
        a {
            text-decoration: none;
        }
        
body {
    background-color: #f1eeea;
    font-family: "DM Sans", sans-serif;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 60px;
    margin: auto;
    width: 80%;
    padding-top: 50px;
}

.faqs .faq .head {
    display: flex;
    padding: 25px 0px;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}

h2 {
    font-family: "Fahkwang", sans-serif;
}

.faqs .faq .head svg {
    transition: transform 0.25s ease-in;
}

.faqs .faq .content {
    height: 0px;
    overflow-y: hidden;
    transition: height 0.25s ease-in;
    border-bottom: 1px solid #afafaf;
}

/* Cuando esta activo */
.faqs .faq.active .head svg {
    transform: rotate(180deg);
}
h1{
    width: 100%;
    text-align:center;
    padding: 1em;
}

section {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
}

section div {
    width: 210px;
    margin: 15px;
    padding: 0.7em;
    border-bottom-left-radius: 7px;
    border-bottom-right-radius: 7px;
    transition: all 0.25s cubic-bezier(0.645,0.045,0.355,1);
    background-color: #fff;
}

section div h3{
    margin: 0.5em 0em;
}

section div h4{
    font-size: 0.875em;
    margin: 0.5em 0em;
    color:#333;
    font-weight: normal;
}

section div .button{
    width: 100%;
    border: none;
    padding: 0.7em;
    background-color: #000;
    color: #fff;
    margin: 0.5em 0em;
}

section div:hover{
    transform: translateY(-10px);
    box-shadow: 1.25px 1.25px 10px rgba(0,0,0,0.5);
}

img{
    width: 100%;
}


h1 {
    padding-top: 50px;
    color: #026aa7;
}

p {
    font-size: 18px;
    color: #555;
}

#particles-js {
    width: 100%;
    height: 200px;
    background: linear-gradient(to bottom, #0077b6, #023e8a);
    position: relative;
    color: white;
    padding-top: 30px;
}

.footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-content p {
    margin: 5px 0;
}

.social-icons {
    margin: 10px 0;
}

.social-icons a {
    margin: 0 10px;
    color: white;
    font-size: 24px;
    text-decoration: none;
    transition: 0.3s;
}

.social-icons a:hover {
    color: #ffcc00;
}

#backToTop {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #ffcc00;
    color: #333;
    padding: 12px 18px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
    border-radius: 50px;
    display: none; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    transition: all 0.3s;
}

#backToTop:hover {
    background: #ffdd44;
    transform: scale(1.1);
}
        
    </style>
</head>

<?php

include "componentes/navbar/navbar.php";
include "componentes/tarjetas/tarjetas.php";
include "componentes/tabla dinamica/tabla.php";
include "componentes/formulario/formulario_ej.php";
include "componentes/acordeon/acordeon.php";
include "componentes/footer/footer.php";

?>