<?php

class conexion {

	 const HOST = "localhost";
    const DBNAME = "ubicame";
    const PORT = "3306";
    const USER = "root";
    const PASS = "";





public static function bdConn()
{

$conexion = mysql_connect("localhost","root","") or die("Problemas en la conexion");

$validacion =mysql_select_db(self::DBNAME)

if(mysql_query($validacion,$conexion)
{
	echo "BD  ya se encuentra creada";
	return $conexion;
}
else
{
	echo " Creando base de datos ....";
	$conexion :: self crea();
	return $conexion;
}
}

public static function crea()
{
	
$sqlCrea = "CREATE DATABASE".$DBNAME;
$sqlCreaTablaUsuario=("CREATE TALBE usuario (mail VARCHAR(12) PRIMARY KEY ,password VARCHAR(6) NOT NULL)");
  

if(mysql_query($sqlCrea,$conexion))
{
	echo "	base creada \n"
}
else { echo "error en la creacion".mysql_error();}

if(mysql_query($sqlCreaTablaUsuario,$conexion))
{
	echo "tabla usuario Creada \n";
}else {
	echo "tabla no creada :(";
	return;
	
}
}


}
?>