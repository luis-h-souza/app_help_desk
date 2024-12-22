<?php

require_once "models/SolicitarAcessoModel.php";

class SolicitarAcessoController
{

  public $baseUrl = "http://localhost/app_help_desk/mvc";
  private $LoginModel;

  public function __construct()
  {
    $this->LoginModel = new Acesso();
  }

  public function index()
  {
    $baseUrl = $this->baseUrl;
    $erro = "";
    require "views/SolicitarAcessoView.php";
  }

}