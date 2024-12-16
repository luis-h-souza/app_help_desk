<?php

session_start();

// montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

// escreve o texto
$texto = /*$_SESSION['id'] . '#' . */$titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// abre o arquivo
$arquivo = fopen("banco.txt", "a");
// escreve o arquivo
fwrite($arquivo, $texto);
// fecha o arquivo
fclose($arquivo);

// echo $texto;
header('Location: ./abrir_chamado.php');