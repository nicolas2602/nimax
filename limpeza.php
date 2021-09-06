<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from logging where fk_cadastro = '$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
header('location:profile.php');
?>