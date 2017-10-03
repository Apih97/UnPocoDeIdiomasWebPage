<?php

if (isset($_POST['Registrar'])) {
	
	include_once 'dbh.inc.php';
	include_once 'registrar.php';

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
		if (!preg_match("/^[a-zA-Z ]*$/",$nombre) || !preg_match("/^[a-zA-Z ]*$/",$apellido)) {
				header("Location: ../registrar.php?registrar=caracinvalids");
				exit();
			}else {
			//Revisar si correo es válido
			if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
  					header("Location: ../registrar.php?registrar=malcorreo");
					exit();	
				}
			else {
				$sql = "SELECT * FROM usuario WHERE usuario_uid = '$Uid' ";
				$resultado = mysqli_query($conn, $sql);
				$checkresultado = mysqli_num_rows($resultado);

				if ($checkresultado > 0) {
					header("Location: ../registrar.php?registrar=uidtomado");
					exit();	
				}else {
					//hashing (cifrar/distorcionar para que sea irreconcible) contraseña
					$ContraHashed = password_hash($Contraseña, PASSWORD_DEFAULT);

					//Insertar usuario en BD.
					$sql = "INSERT INTO usuario (usuario_nombre, usuario_apellido, usuario_correo, usuario_uid, usuario_pass) VALUES ('$nombre', '$apellido', '$correo', '$Uid', '$ContraHashed');";
					mysqli_query($conn, $sql);
					header("Location: ../registrar.php?registrar=logro");
					exit();	
				}
			}
		}
	}

} else {
	header("Location: ../registrar.php");
	//Mensaje de confirmación
	exit();
}