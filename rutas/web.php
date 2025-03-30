<?php

use Lib\Enrutador;

Enrutador::get("/",function(){
    require_once "../AplicacionInicio/inicio.php";
});

Enrutador::get("/a",function(){
    echo "HOLA MUNDO";
});

Enrutador::dispatch();