<?php

session_start();

require_once "./class_cadastro.php";

$cadastrados = new Cadastrados();

$usuario_app = [
  ['email' => 'adm@teste.com.br', 'senha' => '1234'],
  ['email' => 'user@teste.com.br', 'senha' => '1234'],
  ['email' => 'manutencao@teste.com.br', 'senha']
];

$usuarios = [];
$usuario_autenticado = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
  if (isset($_POST['confirmar'])) {
    
    $usuarios = [
      'nome' => $_POST['nome-cad'],
      'email' => $_POST['email-cad'],
      'senha' => $_POST['senha-cad']
    ];
    
    $_SESSION['email-cad'] = $usuarios['email'];
    $_SESSION['senha-cad'] = $usuarios['senha'];
    
    $cadastrados -> adicionar($usuarios);

  } elseif (isset($_POST['remover'])) {
    $id = $_POST['id'];
    $cadastrados -> remover($id);
  }
};

$usuario_cadastro = $cadastrados -> listar();

$tabela_vazia = '';
$tabela_html = '';

if(empty($usuario_cadastro)) {
  $tabela_vazia = "<p class='alert alert-info'>Nenhum usuário cadastrado</p>";
} 
  else {
    foreach($usuario_cadastro as $id => $item) {
      $nome = $item['nome'];
      $email = $item['email'];
      $senha = $item['senha'];

      $tabela_html .= "
        <tr>
          <td>$nome</td>
          <td>$email</td>
          <td>$senha</td>
          <td class='text-center'>
            <form method='post'>
              <input type='hidden' name='id' value='$id'>
              <button type='submit' name='remover' class='btn btn-danger'>Remover</button>
            </form>
          </td>
        </tr>";
    }
  }