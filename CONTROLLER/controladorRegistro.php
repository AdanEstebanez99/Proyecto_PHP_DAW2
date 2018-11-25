<?php

	require_once '../MODEL/registroUsuario.php';
        
        //$data = json_decode(file_get_contents('php://input'));
        //$data = $_POST['nombre'];
//        $data = json_decode($_POST['data']);
        
//        $data = $_POST['nombre'];
//        
//        echo $data;
        
	$resultado = registroUsuario::creaUsuario(
                $_POST['nombre'],
                $_POST['apellidos'],
                $_POST['contrasena'],
                $_POST['email'],
                $_POST['nick']
                );
	//echo json_encode($resultado);

//        echo var_dump($data);
	if ($resultado === false) {
		echo json_encode(false);
	} else {
		if ($resultado == "error") {
			$resultado = "no se ha lanzado ninguna consulta";
			echo json_encode($resultado);
		} else {
			echo json_encode(true);
		}
	}

