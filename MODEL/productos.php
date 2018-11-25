<?php

require_once 'conexionDB.php';
require_once 'clases/Moto.php';


abstract class productos {

    public static function getProductos($pagina) { 
        $conexion = conexionDB::conexion();
        
        
    //SETEAMOS LOS VALORES MINIMOS Y MAXIMOS SEGUN LA PAGINA EN LA QUE ESTEMOS
        
        $intervalo = 16;
        $min = ($intervalo * $pagina) - 16;
        
        
        $select = "SELECT producto.ID_PROD AS ID_PROD, producto.ID_MAR AS ID_MAR, marca.NOM_MAR AS NOM_MAR, producto.ID_MOD AS ID_MOD, modalidad.NOM_MOD AS NOM_MOD, producto.NOM_PRO AS NOM_PRO, producto.COL_PRO AS COL_PRO, producto.CIL_PRO AS CIL_PRO, producto.IMG_PRO AS IMG_PRO 
            FROM producto
            LEFT JOIN marca ON producto.ID_MAR=marca.ID_MAR
            LEFT JOIN modalidad ON producto.ID_MOD=modalidad.ID_MOD
            LIMIT $min, $intervalo";

        $consulta = $conexion->query($select);
        
        
        $productos = [];
        
        while ($moto = $consulta->fetchObject()) {
            $productos[] = new Moto ($moto->ID_PROD, $moto->ID_MAR, $moto->NOM_MAR, $moto->ID_MOD, $moto->NOM_MOD, $moto->NOM_PRO, $moto->COL_PRO, $moto->CIL_PRO, $moto->IMG_PRO);
        }
//        return "Hay ".$numPaginas." paginas, Estamos en la pagina "
//                .$pagina. " y se mostraria el min ".$min." y el maximo ".$max;
        
        return $productos;
    }
    
        public static function getPaginas() { 
    
            //OBTENEMOS EL NUMERO DE PAGINAS QUE NOS VAN A HACER FALTA
            
            $conexion = conexionDB::conexion();
        
            $select = "SELECT *
                    FROM producto";

            $consulta = $conexion->query($select);
        
            $prueba = $consulta->rowCount();
        
            $numPag = $prueba / 16;
        
            $numPaginas = ceil($numPag);
            
            return $numPaginas;
        
        }
        
        
        public static function getPaginasFav($id) { 
    
            //OBTENEMOS EL NUMERO DE PAGINAS QUE NOS VAN A HACER FALTA
            
            $conexion = conexionDB::conexion();
        
            $select = "SELECT *
                       FROM usu_prod_fav
                       WHERE ID_USU = '$id'";

            $consulta = $conexion->query($select);
        
            $prueba = $consulta->rowCount();
        
            $numPag = $prueba / 16;
        
            $numPaginas = ceil($numPag);
            
            return $numPaginas;
        
        }
        
        
        public static function getProdEspec($id) { 
            $conexion = conexionDB::conexion();    
        
            $select = "SELECT producto.ID_PROD AS ID_PROD, producto.ID_MAR AS ID_MAR, marca.NOM_MAR AS NOM_MAR, producto.ID_MOD AS ID_MOD, modalidad.NOM_MOD AS NOM_MOD, producto.NOM_PRO AS NOM_PRO, producto.COL_PRO AS COL_PRO, producto.CIL_PRO AS CIL_PRO, producto.IMG_PRO AS IMG_PRO 
                FROM producto
                LEFT JOIN marca ON producto.ID_MAR=marca.ID_MAR
                LEFT JOIN modalidad ON producto.ID_MOD=modalidad.ID_MOD
                WHERE ID_PROD = $id";

            $consulta = $conexion->query($select);
        
        
            $productos = [];
        
            while ($moto = $consulta->fetchObject()) {
                $productos[] = new Moto ($moto->ID_PROD, $moto->ID_MAR, $moto->NOM_MAR, $moto->ID_MOD, $moto->NOM_MOD, $moto->NOM_PRO, $moto->COL_PRO, $moto->CIL_PRO, $moto->IMG_PRO);
            }
        
            return $productos;
        }
        
        
        
        public static function getProdFav($pagina, $id) { 
            
            
            $conexion = conexionDB::conexion();
        
        
    //SETEAMOS LOS VALORES MINIMOS Y MAXIMOS SEGUN LA PAGINA EN LA QUE ESTEMOS
        
        $intervalo = 16;
        $min = ($intervalo * $pagina) - 16;
        
        
        $select = "SELECT producto.ID_PROD AS ID_PROD, producto.ID_MAR AS ID_MAR, marca.NOM_MAR AS NOM_MAR, producto.ID_MOD AS ID_MOD, modalidad.NOM_MOD AS NOM_MOD, producto.NOM_PRO AS NOM_PRO, producto.COL_PRO AS COL_PRO, producto.CIL_PRO AS CIL_PRO, producto.IMG_PRO AS IMG_PRO 
                   FROM producto
                   LEFT JOIN marca ON producto.ID_MAR=marca.ID_MAR
                   LEFT JOIN modalidad ON producto.ID_MOD=modalidad.ID_MOD
                   WHERE ID_PROD IN (SELECT ID_PROD 
                                     FROM usu_prod_fav
                                     WHERE ID_USU = $id)
                   LIMIT $min, $intervalo";

        $consulta = $conexion->query($select);
        
        
        $productos = [];
        
        while ($moto = $consulta->fetchObject()) {
            $productos[] = new Moto ($moto->ID_PROD, $moto->ID_MAR, $moto->NOM_MAR, $moto->ID_MOD, $moto->NOM_MOD, $moto->NOM_PRO, $moto->COL_PRO, $moto->CIL_PRO, $moto->IMG_PRO);
        }
        
        return $productos;
            
        }
}