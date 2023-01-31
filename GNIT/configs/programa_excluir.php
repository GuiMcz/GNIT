<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');


$id = $_POST['id'];
$data = date('Y-m-d');


$update_cadastro = "UPDATE programa_computador SET
                      data_exc='$data',
                      ativo= 0
                      WHERE cd_pro = $id";

$query_cadastro = mysqli_query($conn, $update_cadastro);

if ($query_cadastro == true) {
  header('location: ../software.php');
  print "<script>alert('Patente excluída!');</script>";
} else {
  header('location: ../software.php');
  print "<script>alert('Não foi possível excluir. Tente novamente!');</script>";
}
