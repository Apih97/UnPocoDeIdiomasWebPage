<?php

if (isset($_POST['Registrar'])) {
	
	include_once 'dbh.inc.php';

	$nombre = mysqli_real_escape_string($conn, $_POST['PrimerNombre']);
	$apellido = mysqli_real_escape_string($conn, $_POST['PrimerApellido']);
	$correo = mysqli_real_escape_string($conn, $_POST['Correo']);
	$Uid = mysqli_real_escape_string($conn, $_POST['Uid']);
	$Contraseña = mysqli_real_escape_string($conn, $_POST['PrimerNombre']);
	
	//Manejo de errores
	//Revisar si hay campos vacios

	if (empty($nombre) || empty($apellido) || empty($correo) || empty($Uid) || empty($Contraseña)) {
		header("Location: ../registrar.php?registrar=vacio");
		exit();
	}else {
		//revisar si los caracteres puestos son validos
		if (!preg_match("@ñ[a-zA-Z]*$", $nombre) || !preg_match("@ñ[a-zA-Z]*$", $apellido)) {
			header("Location: ../registrar.php?registrar=caracinvalids");
			exit();
		}else {
			//Revisar si correo es válido
			if (!filter_var($correo), FILTER_VALIDATE_EMAIL) {
				header("Location: ../registrar.php?registrar=malcorreo");
				exit();	
			}else {
				$sql = "SELECT * FROM usuario WHERE usuario_uid = '$Uid' ";
				$resultado = mysqli_query($conn, $sql);
				$checkresultado = mysqli_num_rows($resultado);

				if ($checkresultado > 0) {
					header("Location: ../registrar.php?registrar=uidtomado");
					exit();	
				}
			}
		}
	}

} else {
	header("Location: ../registrar.php");
	exit();
}