<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['upBack'])){
   $id=$_POST['id'];
   $proj = $_POST['proj'];
   $arq = $_POST['arq'];
   $user = $_SESSION['IdCadastro'];

   $upBackup="update backup set nomeBackup='$proj', arquivoBackup='$arq' where IdBackup={$id} and fk_IdCadastro='$_SESSION[IdCadastro]'";
   mysqli_query($con, $upBackup);
   header ('location:backup.php');   

}

$IdBackup = $_GET['IdBackup'];
$dataBackup = $_GET['dataBackup'];
//  $nomeBackup = $_GET['nomeBackup'];
//  $arquivoBackup = $_GET['arquivoBackup'];
// $user = $_GET['fk_IdCadastro'];

$sqlGetBack="select * from backup where IdBackup=($IdBackup)";
$queryBack=mysqli_query($con, $sqlGetBack);
$resultBack=mysqli_fetch_assoc($queryBack);

?>