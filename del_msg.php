<?php 
include 'php/conexao.php';
include 'php/select2.php';

$sq="DELETE FROM problema where problema.IdProblema='".$_GET['del']."'";
mysqli_query($con,$sq);
header('location:bo.php');

?>