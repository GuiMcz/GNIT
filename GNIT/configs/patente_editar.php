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

$update_cadastro = "UPDATE patente SET
                      tit_ptt='$titulo',
                      num_ped='$num_ped',
                      tp_ptt='$tipo',
                      sit_ptt='$status',
                      qtd_aut='$num_autores',
                      dt_mod='$data'
                      WHERE cd_ptt = $id";

$query_cadastro = mysqli_query($conn, $update_cadastro);

if ($query_cadastro == true) {
  header('location: ../patente.php');
  print "<script>alert('Editado com sucesso!');</script>";
} else {
  header('location: ../patente.php');
  print "<script>alert('Não foi possível editar. Tente novamente!');</script>";
}
