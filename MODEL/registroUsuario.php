<?php

require_once 'conexionDB.php';


abstract class registroUsuario {

    public static function creaUsuario($nickUsu, $nomUsu, $apeUsu, $conUsu, $emailUsu) {
//        error_reporting(0);

            $conmd5 = md5($conUsu);

            $conexion = conexionDB::conexion();
            $insert = "INSERT INTO usuario (NICK_USU, NOM_USU, APE_USU, CON_USU, COR_USU)
                       VALUES ('$nickUsu', '$nomUsu', '$apeUsu', '$conmd5', '$emailUsu')";

            $consulta = $conexion->query($insert);
        
        return $consulta;
        
    }   
    
    public static function idUsuario($nomUsu) {
        
        $conexion = conexionDB::conexion();
        
        $select = "SELECT ID_USU FROM usuario WHERE NICK_USU = '$nomUsu'";
        
        $consulta = $conexion->query($select);
        
        $id ;
        
        while ($usuario = $consulta->fetchObject()) {
          $id =  $usuario->ID_USU;
        }
        
        return $id;
    }
}