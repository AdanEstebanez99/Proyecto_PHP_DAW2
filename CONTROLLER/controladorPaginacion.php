<?php

	require_once '../MODEL/productos.php';
        
            $productos = productos::getPaginas();
	
	echo json_encode($productos, JSON_UNESCAPED_SLASHES);