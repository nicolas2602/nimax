<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['upBack'])){
   $proj = $_POST['proj'];
   $user = $_SESSION['IdCadastro'];

   $upBackup="update backup set nomeBackup='$proj' where fk_IdCadastro='$user'";
   mysqli_query($con, $upBackup);
   header ('location:backup.php');   

}

$IdBackup = $_GET['IdBackup'];
$dataBackup = $_GET['dataBackup'];
$user = $_GET['fk_IdCadastro'];

$sqlGetBack="select * from backup where IdBackup=($IdBackup)";
$queryBack=mysqli_query($con, $sqlGetBack);
$resultBack=mysqli_fetch_assoc($queryBack);

?>