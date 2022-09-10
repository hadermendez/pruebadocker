<?php 

require_once "conexion.php";
class ModeloFormularios{

    static public function mdloConsultarDatos($tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt -> fetchall();
    }
}