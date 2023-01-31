<?php

include 'conexao.php';

date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome'];
$nac = $_POST['nac'];
$cpf = $_POST['cpf'];
$qlf = $_POST['qlf'];
$end = $_POST['end'];
$num = $_POST['num'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$pais = $_POST['pais'];
$tel = $_POST['tel'];
$email = $_POST['email'];


$get_cadastro = "INSERT INTO autor (nome_aut, cpf_aut, end_aut, bai_aut, cid_aut, est_aut, eml_aut, pais_aut, nm_aut, nac_aut, cep_usu, qlf_aut, tel_aut) 
VALUES ('$nome', '$cpf', '$end', '$bairro', '$cidade', '$estado', '$email', '$pais', '$num', '$nac', '$cep', '$qlf', '$tel')";

$query_cadastro = mysqli_query($conn, $get_cadastro);
