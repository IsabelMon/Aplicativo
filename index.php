<?php

//HACE LA INVOCACIÓN DE LO QUE NECESITO
require_once "Controler/plantilla.controlador.php";

//require_once "Controler/formulario.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla(); //en los modelos se guardan las funciones POO