<?php
include 'php/conexao.php';
include 'php/select2.php';
include 'php/select3.php';

$sq="DELETE FROM logging where logging.IdLogging='".$_GET['del']."'";
mysqli_query($con,$sq);
header('location:profile.php');
?>

