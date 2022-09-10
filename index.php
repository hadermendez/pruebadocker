<?php

// require_once "modelos/formularios.modelo.php";
// require_once "controladores/controlador.plantilla.php";
require_once "modelos/conexion.php";


$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt -> fetchall();

// var_dump($usuario);