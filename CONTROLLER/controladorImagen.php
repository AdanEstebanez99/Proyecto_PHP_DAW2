<?php

	require_once '../MODEL/productos.php';
        
        if (isset($_GET['ID'])) {
            $productos = productos::getProdEspec($_GET['ID']);
        }
	
	echo json_encode($productos, JSON_UNESCAPED_SLASHES);
        //echo ceil($productos);
        //echo $productos;