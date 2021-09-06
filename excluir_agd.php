<?php

include 'php/conexao.php';

$del="DELETE FROM agenda WHERE agenda.IdAgenda = '".$_GET['del']."'";

$query=mysqli_query($con,$del);

if($query){
    echo"<script>alert('Agenda Excluída!')</script>";
    header('location:agenda.php');
}


?>