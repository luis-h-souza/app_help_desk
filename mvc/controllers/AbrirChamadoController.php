<?php

require_once "models/HomeModel.php";

class AbrirChamadoController
{
  
  public $baseUrl = "http://localhost/app_help_desk/mvc";
  private $AbrirModel;

  public function __construct()
  {
    $this->AbrirModel = new Home;
  }

  public function index()
  {
    $baseUrl = $this->baseUrl;
    $erro = "";
    require "views/AbrirChamadoView.php";
  }


}