<?php

require "models/LoginModel.php";

class LoginController
{

  public $baseUrl = "http://localhost/app_help_desk/mvc";
  private $loginModel;

  public function __construct()
  {
    $this->loginModel = new Login();
  }

  public function index()
  {
    $baseUrl = $this->baseUrl;
    $erro = "";
    require "views/LoginForm.php";
  }

  public function criar()
  {
    // $nome = 'administrador';
    // $email = 'adm@adm.com';
    // $senha = 'admin123';
    // $nivelAcesso = '1';

    $nome = '';
    $email = '';
    $senha = '';
    $nivelAcesso = '';
    $this->loginModel->inserir($nome, $email, $senha, $nivelAcesso);
  }

  public function autenticar()
  {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $manter_logado = isset($_POST['manter_logado']) ? true : false;

    $autenticado = $this->loginModel->getByUsuarioESenha($email, $senha, $manter_logado);

    var_dump($autenticado);

    if (!$autenticado) {
      $erro = "<div class='alert alert-danger'><small>Não foi possível efetuar o login. Tente novamente</small></div>";

      $baseUrl = $this->baseUrl;
      require "views/LoginForm.php";
    } else {
      header("location: " . $this->baseUrl . "/home");
      exit(); // Sempre é uma boa prática usar exit() após o redirecionamento
    }
  }
}