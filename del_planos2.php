<?php 
include 'php/conexao.php';
include 'php/select2.php';

$sq="DELETE FROM compra where compra.IdCompra='".$_GET['del']."'";
mysqli_query($con,$sq);
header('location:info_planos.php');

?>