<?php

require "cadastro.php";

session_start();

// Variável que verifica se a autenticação foi realizada
$usuario_autenticado = false;

foreach ($usuario_app as $user ) {
  // faz autenticação
  if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    $usuario_autenticado = true;
  }
  
  if($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
  } else {
    $_SESSION['autenticado'] = 'NÃO';
    // função nativa que funciona como desvio, espera receber uma string com o destino a ser redirecionado
    header('Location: index.php?login=erro');
  }
}
  foreach ($usuarios as $user) {
    
    if (isset($_POST['confirmar'])) {
      if($_SESSION['email-cad'] == $_POST['email-cad'] && $_SESSION['senha-cad'] == $_POST['senha-cad']) {
        $usuario_autenticado = true;
        header('Location: index.php');
      }
      if($usuario_autenticado) {
        $_SESSION['cadastrado'] = 'SIM';
        header('Location: home.php');
      } else {
        $_SESSION['cadastrado'] = 'NÃO';
        header('Location: primeiro_acesso.php?cadastro=erro');
      }
    }
  }
?>