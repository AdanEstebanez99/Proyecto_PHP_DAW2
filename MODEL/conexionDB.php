<?php
abstract class ConexionDB {
  private static $servidor = 'localhost';
  private static $db = 'motos';
  private static $usuario = 'root';
  private static $contrasena = '';
  public static function conexion() {
    try {
      $conexion = new PDO("mysql:host=".self::$servidor.";dbname=".self::$db.";charset=utf8", self::$usuario, self::$contrasena);
    } catch (PDOException $e) {
      echo "Conexion con la base de datos incorrecta";
    }
    return $conexion;
  }
}