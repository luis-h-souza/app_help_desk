<?php

require_once "DataBase.php";

class Home
{
  private $db;

  public function __construct()
  {
    $this->db = DataBase::getConexao();
  }
}