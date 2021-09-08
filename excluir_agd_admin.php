<?php

include 'php/conexao.php';
include 'php/select2.php';

$del="DELETE FROM agenda WHERE IdAgenda = '".$_GET['del']."'";

mysqli_query($con,$del);
header('location:marca_agenda.php');

?>
