<?php

	require_once '../MODEL/productos.php';
        
        if (isset($_GET['pagina'])) {
            $productos = productos::getProductos($_GET['pagina']);
        } else {
            $productos = productos::getProductos(1);
        }
	
	echo json_encode($productos, JSON_UNESCAPED_SLASHES);