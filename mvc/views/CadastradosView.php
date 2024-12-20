<?php

$conteudo ='';

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/cadastrados.html");

# substituir a tag [[base]] pelo conteúdo da variável $base. O mesmo acontece com as demais.
$html = str_replace("[[header]]", $header, $html);
$html = str_replace("[[conteudo]]", $conteudo, $html);
$html = str_replace("[[footer]]", $footer, $html);
$html = str_replace("[[base-url]]", $baseUrl, $html);
$html = str_replace("[[js]]", "", $html);

echo $html;