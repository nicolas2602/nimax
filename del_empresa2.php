<?php 
include 'php/conexao.php';
include 'php/select2.php';

$sqlDel = "delete from empresa where IdEmpresa='".$_GET['']."' and fk_IdCadastro='$_SESSION[]'";
mysqli_query($con, $sqlDel);
header('location: empresa.php');


?>