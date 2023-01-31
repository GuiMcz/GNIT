<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');

$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$vinculo = $_POST['vinculo'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$expediente = $_POST['expediente'];
$endereco = $_POST['endereco'];
$data = date('Y-m-d');

$get_cadastro = "INSERT INTO usuário (lg_usu, sen_usu, nome_usu, cpf_usu, vnc_usu, tel_usu, eml_usu, hor_usu, end_usu, dt_cad, sit_usu) 
VALUES ('$login', '$senha', '$nome', '$cpf', '$vinculo', '$tel', '$email', '$expediente', '$endereco', '$data', '1')";

$query_cadastro = mysqli_query($conn, $get_cadastro);

if ($query_cadastro == true) {
  print "<script>alert('Cadastro realizado com sucesso!');</script>";
  header('location: ../index.php');
} else {
  print "<script>alert('Ocorreu algum erro. Tente novamente.');</script>";
  header('location: ../cadastro.php');
};
