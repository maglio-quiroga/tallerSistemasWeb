<?php

namespace Lib;

class Enrutador{

    private static $rutas = [];

    public static function get($uri , $callback){

        $uri = trim($uri,"/");
        self::$rutas['GET'][$uri] = $callback;

    }

    public static function post($uri , $callback){

        $uri = trim($uri,"/");
        self::$rutas['POST'][$uri] = $callback;

    }

    public static function dispatch(){

        $uri = $_SERVER["REQUEST_URI"];
        $uri = trim($uri,"/");
        $method = $_SERVER["REQUEST_METHOD"];

        foreach(self::$rutas[$method] as $ruta => $callback){
            if($ruta == $uri){
                $callback();
                return;
            }
        }

        echo "ERROR: COD(404)";

    }

}