<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');

$titulo = $_POST['titulo'];
$num_ped = $_POST['num_ped'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];
$num_autores = $_POST['num_autores'];
$data = date('Y-m-d');



$get_cadastro = "INSERT INTO patente 
(tit_ptt,
 num_ped,
  tp_ptt,
   sit_ptt,
    qtd_aut,
     dt_cad,
      ativo) 
VALUES 
('$titulo',
 '$num_ped',
  '$tipo',
   '$status',
    '$num_autores',
     '$data',
      1)";

$query_cadastro = mysqli_query($conn, $get_cadastro);

if ($query_cadastro == true) {
      print "<script>alert('Cadastro realizado com sucesso!');</script>";
      header('location: ../patente.php');
}
