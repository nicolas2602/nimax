<?php

include 'php/conexao.php';

$del="DELETE FROM agenda WHERE agenda.IdAgenda = '".$_GET['del']."'";

mysqli_query($con,$del);
header('location:marca_agenda.php');

?>
