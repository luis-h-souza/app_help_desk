<?php

session_start();

class cadastrados{

  public function __construct() {
    if(!isset($_SESSION['cadastrados'])) {
      $_SESSION['cadastrados'] = [];
    }
  }

  public function adicionar($usuarios) {
    $_SESSION['cadastrados'][] = $usuarios;
  }

  public function remover($id) {
    unset($_SESSION['cadastrados'] [$id]);
  }

  public function listar() {
    return $_SESSION['cadastrados'];
  }
}