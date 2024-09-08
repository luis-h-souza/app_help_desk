<?php
  
require_once "validador_acesso.php";
require_once "./cadastro.php";

$html = file_get_contents("template_tabela.html");
$html = str_replace("[[tabela_vazia]]", $tabela_vazia, $html);
$html = str_replace("[[cadastrados]]", $tabela_html, $html);

echo $html;