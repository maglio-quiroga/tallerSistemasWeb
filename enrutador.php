<?php

class Enrutador{

    private $controlador;
    private $metodo;

    public function __construct() {

        $this->buscarRuta();

    }

    public function buscarRuta(){

        $url = explode('/', URL);
        $nombreControlador = 'controlador';
        $this->metodo = !empty($url[0]) ? $url[0] : 'inicio';
        $this->controlador = $nombreControlador . "Pagina";
        
        $ruta = __DIR__.'/controladores/'.$this->controlador.'.php';

        if (!file_exists($ruta)) {
            die("Error: El archivo del controlador no existe ($ruta)");
        }

        require_once($ruta);

    }

    public function ejecutar(){

        $controlador = new $this->controlador();
        $metodo = $this->metodo;

        $controlador->$metodo();

    }

}