<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from cadastro where IdCadastro='$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
header('location:index.php');
?>