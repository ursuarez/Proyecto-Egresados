<?php
	require 'conexion.php';
	if($_POST)
	{
		//variables POST
		$nom = $_POST['nom'];
		$ape = $_POST['ape'];
		$fn = $_POST['fn'];
		$cal = $_POST['cal'];
		$col = $_POST['col'];
		$ne = $_POST['ne'];
		$ni = $_POST['ni'];
		$cp = $_POST['cp'];
		$ce = $_POST['ce'];
		$tp = $_POST['tp'];
		$fb = $_POST['fb'];
	
		//registra los datos del empleados
		$sql = "INSERT INTO registrados (nombres, apellidos, fec_nac, calle, colonia, num_ext, num_int, cod_pos, cor_ele, tel_par, fb) 
	      VALUES ('$nom', '$ape', '$fn','$cal', '$col', '$ne', '$ni', '$cp', '$ce', '$tp', '$fb')";
		mysqli_query($conn,$sql) or die ('Error. ' . mysqli_error());
	}
?>