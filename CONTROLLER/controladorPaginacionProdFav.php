<?php

	require_once '../MODEL/productos.php';
        
        require_once '../MODEL/registroUsuario.php';
        
        
        $id = registroUsuario::idUsuario ($_POST['nom_usu']);
        
        $productos = productos::getPaginasFav($id);
	
	echo json_encode($productos, JSON_UNESCAPED_SLASHES);