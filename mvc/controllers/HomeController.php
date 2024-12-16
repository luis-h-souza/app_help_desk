<?php

require_once "models/HomeModel.php";

class HomeController
{
  
  public $baseUrl = "http://localhost/app_help_desk/mvc";
  private $homeModel;

  public function __construct()
  {
    $this->homeModel = new Home;
  }

  public function index()
  {
    $baseUrl = $this->baseUrl;
    $erro = "";
    require "views/HomeView.php";
  }


}