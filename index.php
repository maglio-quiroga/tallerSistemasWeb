<?php

require_once(__DIR__. '/configuraciones.php');
require_once(__DIR__. '/enrutador.php');

$enrutador = new Enrutador();
$enrutador->ejecutar();