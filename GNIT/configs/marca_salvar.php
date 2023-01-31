<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');

$titulo = $_POST['titulo'];
$num_ped = $_POST['num_ped'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];
$ling = $_POST['ling'];
$campo = $_POST['campo'];
$num_autores = $_POST['num_autores'];
$data = date('Y-m-d');



$get_cadastro = "INSERT INTO programa_computador (titulo, num_ped, tipo_pro, status, qtd_aut, ling, campo, data_cad, ativo) 
VALUES ('$titulo', '$num_ped', '$tipo', '$status', '$num_autores', '$ling', '$campo', '$data', 1)";

$query_cadastro = mysqli_query($conn, $get_cadastro);
