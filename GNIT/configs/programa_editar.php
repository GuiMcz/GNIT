<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');


$id = $_REQUEST['id'];
$titulo = $_POST['titulo'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];
$ling = $_POST['ling'];
$campo = $_POST['campo'];
$num_autores = $_POST['num_autores'];
$data = date('Y-m-d');

$update_cadastro = "UPDATE programa_computador SET
                      titulo='$titulo',
                      tipo_pro='$tipo',
                      status='$status',
                      campo='$campo',
                      ling='$ling',
                      qtd_aut='$num_autores',
                      data_mod='$data'
                      WHERE cd_pro = $id";

$query_cadastro = mysqli_query($conn, $update_cadastro);

if ($query_cadastro == true) {
  header('location: ../software.php');
  print "<script>alert('Editado com sucesso!');</script>";
} else {
  // header('location: ../software.php');
  // print "<script>alert('Não foi possível editar. Tente novamente!');</script>";
  echo '$titulo', '$ling';
}
