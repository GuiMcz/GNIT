<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');


$id = $_REQUEST['id'];
$titulo = $_POST['titulo'];
$num_ped = $_POST['num_ped'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];
$num_autores = $_POST['num_autores'];
$data = date('Y-m-d');

$update_cadastro = "UPDATE desenho_industrial SET
                      tit_des='$titulo',
                      num_ped='$num_ped',
                      tipo='$tipo',
                      status='$status',
                      qtd_aut='$num_autores',
                      dt_mod='$data'
                      WHERE cd_des = $id";

$query_cadastro = mysqli_query($conn, $update_cadastro);

if ($query_cadastro == true) {
  header('location: ../desenho.php');
  print "<script>alert('Editado com sucesso!');</script>";
} else {
  header('location: ../desenho.php');
  print "<script>alert('Não foi possível editar. Tente novamente!');</script>";
}
