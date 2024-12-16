<?php

class SairController 
{

  public $baseUrl = "http://localhost/app_help_desk/mvc";

  public function index() {

    # remove todas as sessões ativas
    session_destroy();

    # redireciona para o ligin
    header("location:" . $this->baseUrl . "/login");
  }

}