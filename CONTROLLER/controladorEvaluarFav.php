<?php

	require_once '../MODEL/favoritos.php';
        require_once '../MODEL/registroUsuario.php';
        
        $id = registroUsuario::idUsuario ($_POST['nom_usu']);
        
	$resultado = favoritos::comprobarFav(
                $_POST['ID'],
                $id
            );
        
	if ($resultado === false) {
            echo json_encode(false);
	} else {
            echo json_encode(true);
		
	}

