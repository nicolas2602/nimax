<?php 
include 'php/conexao.php';
include 'php/select2.php';

$sq="DELETE FROM backup where backup.IdBackup='".$_GET['del']."'";
mysqli_query($con,$sq);
header('location: backup.php');

?>