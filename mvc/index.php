<?php

session_start();

$requisicao = trim(strtolower($_SERVER['REQUEST_URI']));

$requisicao = str_replace("/app_help_desk/mvc/", "", $requisicao);

$segmentos = explode("/", $requisicao);

$controlador = isset($segmentos[0]) ? $segmentos[0] : "home";
$metodo = isset($segmentos[1]) && $segmentos[1] != "" ? $segmentos[1] : "index";
$identificador = isset($segmentos[2]) && $segmentos[2] != "" ? $segmentos[2] : null;

switch ($controlador) {
  case 'home':
    // validaSessao();
    require "controllers/HomeController.php";
    $controller = new HomeController();
    break;

  case 'abrir_chamado':
    // validaSessao();
    require "controllers/AbrirChamadoController.php";
    $controller = new AbrirChamadoController();
    break;

  case 'consultar_chamados':
    // validaSessao();
    require "controllers/ConsultarChamadosController.php";
    $controller = new ConsultarChamadosController();
    break;

  case 'cadastrados':
    // validaSessao();
    require "controllers/CadastradosController.php";
    $controller = new CadastradosController();
    break;

  case 'login':
    require "controllers/LoginController.php";
    $controller = new LoginController();
    break;

  case 'solicitar_acesso':
    require "controllers/SolicitarAcessoController.php";
    // $controller =  new SolicitarAcessoController();
    break;

  case 'sair':
    require "controllers/sairController.php";
    $controller = new SairController();
    break;

  default:
    $baseUrl = "http://localhost/app_help_desk/mvc";
    // header("Location: ") . $baseUrl . "404";
    echo "página não encontrada";
    break;
}

if ($identificador) {
  $controller->$metodo($identificador);
} else {
  $controller->$metodo();
}

function validaSessao()
{
    // Verifica se o cookie 'email' está definido
    if (!isset($_COOKIE['email'])) {
        
        // Verifica se o cookie 'nivelAcesso' está definido
        if (!isset($_COOKIE['nivelAcesso'])) {
            
            // Verifica se a sessão 'email' está definida
            if (!isset($_SESSION["email"])) {
                
                $baseUrl = "http://localhost/app_help_desk/mvc";
                
                // Redireciona para a página de login
                header("location:" . $baseUrl . "/login");
                exit(); // Adiciona exit() para garantir que o script pare de executar após o redirecionamento
            }
        }
    }
}
