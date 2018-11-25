<?php

	require_once '../MODEL/favoritos.php';
        require_once '../MODEL/registroUsuario.php';
        
        $id = registroUsuario::idUsuario ($_POST['nom_usu']);
        
	$resultado = favoritos::insertarProdFav(
                $_POST['ID'],
                $id
            );

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

