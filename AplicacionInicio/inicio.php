<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" > 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/static/css/navbar.css" rel="stylesheet">
    <link href="/static/css/tarjetas.css" rel="stylesheet">
    <link href="/static/css/banner.css" rel="stylesheet">
    <link href="/static/css/tabla.css" rel="stylesheet">
    <link href="/static/css/acordeon.css" rel="stylesheet">
    <link href="/static/css/footer.css" rel="stylesheet">
    <link href="/static/css/formulario.css" rel="stylesheet">

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
    </style>
</head>

<?php

include "componentes/navbar/navbar.php";
include "componentes/banner/banner.php";
include "componentes/tarjetas/tarjetas.php";
include "componentes/tabla dinamica/tabla.php";
include "componentes/formulario/formulario_ej.php";
include "componentes/acordeon/acordeon.php";
include "componentes/footer/footer.php";

?>