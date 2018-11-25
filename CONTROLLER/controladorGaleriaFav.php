<?php

	require_once '../MODEL/productos.php';
        
        require_once '../MODEL/registroUsuario.php';
        
        
        $id = registroUsuario::idUsuario ($_POST['nom_usu']);
        
        if (isset($_GET['pagina'])) {
            $productos = productos::getProdFav($_GET['pagina'], $id);
        } else {
            $productos = productos::getProdFav(1, $id);
        }
	
	echo json_encode($productos, JSON_UNESCAPED_SLASHES);