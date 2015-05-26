<?php

// Constantes definidas
define("MYSQL_IP_SERVIDOR","localhost");
define("MYSQL_USUARIO","blas");
define("MYSQL_CONTRASENIA","blasblas");
define("MYSQL_BASE_DE_DATOS","mis-usuarios");
define("MYSQL_TABLA_USUARIOS","usuarios");
define("MYSQL_CAMPO_NOMBRE_USUARIO", "nombre");
define("MYSQL_CAMPO_NOMBRE_PASSWORD", "psswrd");

global $conexion ;

// Consultas preparadas para actualizar
$SQL_COMPROBAR_USUARIO = 'SELECT COUNT(*) FROM `'.constant("MYSQL_BASE_DE_DATOS")."`.`".constant("MYSQL_TABLA_USUARIOS")."` WHERE `".constant("MYSQL_CAMPO_NOMBRE_USUARIO").'`=? AND `'.constant("MYSQL_CAMPO_NOMBRE_PASSWORD")."`=?";
$SQL_INSERTAR_USUARIO  = 'INSERT INTO `'.constant("MYSQL_BASE_DE_DATOS")."`.`".constant("MYSQL_TABLA_USUARIOS")."` VALUES (?,?)";
$SQL_ACTUALIZAR_PASSWORD = 'UPDATE `'.constant("MYSQL_BASE_DE_DATOS")."`.`".constant("MYSQL_TABLA_USUARIOS")."` SET `".constant("MYSQL_CAMPO_NOMBRE_PASSWORD")."`=? WHERE `".constant("MYSQL_CAMPO_NOMBRE_USUARIO").'`=? AND `'.constant("MYSQL_CAMPO_NOMBRE_PASSWORD")."`=?";

$conexion= mysqli_connect(MYSQL_IP_SERVIDOR, MYSQL_USUARIO, MYSQL_CONTRASENIA ) ;

function desconectar($conexion)
{
	$ok = mysqli_close($conexion);
	return $ok;
}

?>
