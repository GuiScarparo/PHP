<?php
require "funcoes.php";

$aluno = $_POST['aluno'];
$aluno2 = $_POST['aluno2'];
$aluno3 = $_POST['aluno3'];
$observacao=$_POST['observacao'];

fiap($aluno,$aluno2,$aluno3, $observacao);
?>