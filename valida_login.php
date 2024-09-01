<?php

session_start();

// Variável que verifica se a autenticação foi realizada
$usuario_autenticado = false;

// usuários do sistema
$usuario_app = [
  ['email' => 'adm@teste.com.br', 'senha' => '1234'],
  ['email' => 'user@teste.com.br', 'senha' => '1234']
];

// echo "<pre>";
// print_r($usuario_app);
// echo "</pre>";

foreach ($usuario_app as $user) {
  // faz autenticação
  if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
    $usuario_autenticado = true;
  }  
}
  if($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'um valor';
    $_SESSION['y'] = 'outro valor';
    header('Location: home.php');
  } else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro'); 
    // função nativa que funciona como desvio, espera receber uma string com o destino a ser redirecionado
  }

/*
print_r($_GET)

echo '<br />'
echo $_GET['email']
echo '<br />'
echo $_GET['senha']
*/

// print_r($_POST);

// echo '<hr />';
// echo $_POST['email'];
// echo '<br />';
// echo $_POST['senha'];

?>