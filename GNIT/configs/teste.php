<?php

$titulo = $_POST['titulo'];
// $num_ped = $_POST['num_ped'];
$tipo = $_POST['tipo'];
$status = $_POST['status'];
$ling = $_POST['ling'];
$campo = $_POST['campo'];
$num_autores = $_POST['num_autores'];
$data = date('Y-m-d');

echo $titulo, $tipo, $num_autores, $campo, $ling;
