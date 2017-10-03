<?php
	session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';
	include_once 'header.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Manejo de errores.
	//Si campos están vacios
	if (empty($uid) || empty($pwd)) {
	 	header("Location: ../index.php?login=vacio");
		exit();
	 } else {
	 	$sql = "SELECT * FROM usuario WHERE usuario_uid='$uid' OR usuario_correo = '$uid'";
	 	$resultado = mysqli_query($conn, $sql);
	 	$resultadocheck = mysqli_num_rows($resultado);
	 	if ($resultadocheck < 1) {
	 		header("Location: ../index.php?login=nouid");
	 		exit();
	 	}else{
	 		if ($row = mysqli_fetch_assoc($resultado)) {
				//De-hashing the password
				$checkContraseñaHashed = password_verify($pwd, $row['usuario_pass']);
			}
				if ($checkContraseñaHashed == false) {
					header("Location: ../index.php?login=malcontra");
					exit();
	 		}elseif ($checkContraseñaHashed == true) {
	 			//logear al usuario
	 			$_SESSION['u_id'] = $row['usuario_id'];
	 			$_SESSION['u_nom'] = $row['usuario_nombre'];
	 			$_SESSION['u_ape'] = $row['usuario_apellido'];
	 			$_SESSION['u_corr'] = $row['usuario_correo'];
	 			$_SESSION['u_uid'] = $row['usuario_uid'];
	 			header("Location: ../indexCompleto.php?login=logeado");
	 			exit();
	 		}
	 	}
	 }

}else {
	header("Location: ../index.php?login=malosdatos");
	exit();
}

