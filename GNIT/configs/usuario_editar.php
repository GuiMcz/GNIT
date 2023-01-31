<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');


$id = $_REQUEST['id'];
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

$update_cadastro = "UPDATE usuário SET
                      lg_usu='$login',
                      sen_usu='$senha',
                      nome_usu='$nome',
                      cpf_usu='$cpf',
                      vnc_usu='$vinculo',
                      tel_usu='$tel',
                      eml_usu='$email',
                      hor_usu='$expediente',
                      end_usu='$endereco',
                      dt_mod='$data'
                      WHERE cd_usu = $id";

$query_cadastro = mysqli_query($conn, $update_cadastro);

if ($query_cadastro == true) {
  print "<script>alert('Perfil editado com sucesso!');</script>";
  header('location: ../propriedades.php');
} else {
  print "<script>alert('Ocorreu algum erro. Tente novamente.');</script>";
  header('location: ../minhaconta.php');
};
