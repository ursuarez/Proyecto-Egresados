<?php
    //Inicializacion de variables
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$database = "egresados";

    //Crear conexion y seleccionar la base
	$conn = mysqli_connect($servername,$username,$password,$database);
	
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
?>