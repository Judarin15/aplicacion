<?php

require_once "app/controladores/plantilla.controlador.php";
require_once "app/controladores/personas.controlador.php";
require_once "app/modelos/personas.modelo.php"; // Ruta corregida

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
