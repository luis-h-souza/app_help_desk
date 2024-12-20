<?php

class DataBase
{
  private static $conexao = null;

  public static function getConexao() 
  {
    if (self::$conexao == null) {
      $host = "localhost";
      $nomeBanco = "help_desk";
      $usuario = "root";
      $senha = "";

      try {
        self::$conexao = new PDO(
          "mysql:host=$host;dbname=$nomeBanco",
          $usuario,
          $senha
        );
        self::$conexao -> setAttribute(
          PDO::ATTR_ERRMODE,
          PDO::ERRMODE_EXCEPTION
        );

      } catch (PDOException $error) {
        echo "Erro de conexão: " . $error->getMessage();
      }
    }
    return self::$conexao;
  }
}