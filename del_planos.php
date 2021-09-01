<?php 
include 'php/conexao.php';
include 'php/select2.php';

$sq="DELETE FROM paga_pacote where paga_pacote.IdPagamento='".$_GET['del']."'";
mysqli_query($con,$sq);
header('location:info_planos.php');

?>