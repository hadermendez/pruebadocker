<?php 

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host= pruebadocker_db_1:3306; dbname= dbname","root","test");

		$link->exec("set names utf8");

		return $link;
	}
 }
?>