<?php

session_start();

//Montagem de texto
$titulo = str_replace('#','-', $_POST['titulo']);
$categoria = str_replace('#','-', $_POST['categoria']);
$descricao = str_replace('#','-', $_POST['descricao']);

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

//abrindo arquivo
$arquivo = fopen('../php/arquivo.hd','a');

//escrevendo texto
fwrite($arquivo, $texto);

//Arquivo fechado
fclose($arquivo);


//echo $texto
header('Location: ../php/abrir_chamado.php')
?>