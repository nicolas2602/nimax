<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="update cadastro set status_user=0 where IdCadastro='".$_GET['act']."'";
mysqli_query($con,$sq);
header('location:user.php');
?>