<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');


$id = $_POST['id_ptt'];
$data = date('Y-m-d');


$update_cadastro = "UPDATE patente SET
                      dt_exc='$data',
                      ativo= 0
                      WHERE cd_ptt = $id";

$query_cadastro = mysqli_query($conn, $update_cadastro);

if ($query_cadastro == true) {
  header('location: ../patente.php');
  print "<script>alert('Patente excluída!');</script>";
} else {
  header('location: ../patente.php');
  print "<script>alert('Não foi possível excluir. Tente novamente!');</script>";
}
