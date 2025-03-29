<?php

#Aca haremos un include de cada una de las paginas.

class ControladorPagina{

    public function inicio(){

        include $_SERVER['DOCUMENT_ROOT'] . '/tallerSistemasWeb/AplicacionInicio/inicio.php';

    }

    public function nosotros(){

        echo "Esta es la pagina nosotros";

    }

}