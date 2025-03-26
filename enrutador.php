<?php

interface IEnrutador{

    public static function inicializar();

}

class Enrutador implements IEnrutador{

    private static $controlador;
    private static $metodo;

    public static function inicializar() {

        self::buscarRuta();
        self::ejecutar();

    }

    private static function  buscarRuta(){

        $url = explode('/', URL);
        $nombreControlador = 'controlador';
        self::$metodo = !empty($url[0]) ? $url[0] : 'inicio';
        self::$controlador = $nombreControlador . "Pagina";
        
        $ruta = __DIR__.'/controladores/'.self::$controlador.'.php';

        if (!file_exists($ruta)) {
            die("Error: El archivo del controlador no existe ($ruta)");
        }

        require_once($ruta);

    }

    private static function ejecutar(){

        $controlador = new self::$controlador();
        $metodo = self::$metodo;

        $controlador->$metodo();

    }

}