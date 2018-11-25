<?php

require_once 'conexionDB.php';
require_once 'clases/Moto.php';


abstract class favoritos {

    public static function insertarProdFav($idProd, $idUsu) { 
        
        $conexion = conexionDB::conexion();
        
        $insert = "INSERT INTO usu_prod_fav (ID_PROD, ID_USU)
                   VALUES ('$idProd', '$idUsu')";

        $consulta = $conexion->query($insert);
        
        return $consulta;
        
    }
    
    
    public static function eliminarProdFav($idProd, $idUsu) { 
        
        $conexion = conexionDB::conexion();
        
        $insert = "DELETE FROM usu_prod_fav
                   WHERE ID_USU = '$idUsu' AND ID_PROD = '$idProd'";

        $consulta = $conexion->query($insert);
        
        return $consulta;
        
    }
    
    
    public static function comprobarFav($idProd, $idUsu) { 
        
        $conexion = conexionDB::conexion();
        
        $select = "SELECT * 
                   FROM usu_prod_fav
                   WHERE ID_USU = '$idUsu' AND ID_PROD = '$idProd'";

        $consulta = $conexion->query($select);
        
        return $consulta->fetchObject();
        
    }
    
       
}