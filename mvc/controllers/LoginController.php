<?php

require_once "models/LoginModel.php";

class LoginController
{

  public $baseUrl = "http://localhost/app_help_desk/mvc";
  private $LoginModel;

  public function __construct()
  {
    $this->LoginModel = new Login();
  }

  public function index()
  {
    $baseUrl = $this->baseUrl;
    $erro = "";
    require "views/LoginForm.php";
  }

  public function criar()
  {
    // $nome = 'Administrador';
    // $email = 'adm@teste.com';
    // $senha = '123456';
    // $nivelAcesso = '1';

    // $nome = 'Luis';
    // $email = 'luis@teste.com';
    // $senha = '123456';
    // $nivelAcesso = '2';
    
    $nome = '';
    $email = '';
    $senha = '';
    $nivelAcesso = '';

    $this->LoginModel->inserir($nome, $email, $senha, $nivelAcesso);
  }

  public function autenticar()
  {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $manter_logado = isset($_POST['manter_logado']) ? true : false;

    $autenticado = $this->LoginModel->getByUsuarioESenha($email, $senha, $manter_logado);

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