<?php

  session_start();

  session_destroy();
  header('Location: index.php');

  /*
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

  // remover indices do array de sessão
  unset($_SESSION['x']); // remove o incide apenas se ele existir

  // destruir a variável de sessão
  // session_destroy();
  */
?>