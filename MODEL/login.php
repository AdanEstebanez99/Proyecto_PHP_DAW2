<?php
	session_start();
	if(isset($_SESSION['usuario'])){

		header('Location: ../index.php');

	}


	if ($_SERVER['REQUEST_METHOD'] == 'GET') {
		$user = $_GET['usuario'];
		$pwd = $_GET['contrasena'];

		require('conexionDB.php');

		$conexion = conexionDB::conexion();

		$md5 = md5($pwd);


		$consulta = $conexion -> prepare('SELECT * FROM usuario where NICK_USU=:Usuario AND CON_USU=:Password');
		$consulta -> execute(array(':Usuario'=>$user,':Password'=>$md5));

		$resultado = $consulta ->fetch();

		if ($resultado!== false) {
			$_SESSION['usuario']=$user;
			header('location: ../VIEW/main.php');
		}else{
			header('Location: ../index.php?status=1');
                        console.log("Error al iniciar sesion, usuario o contraseña incorrectos");
		}
	}
?>