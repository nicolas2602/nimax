<?php
include 'php/conexao.php';
include 'php/select2.php';

if(isset($_POST['delBack'])){
   $id =$_POST['id'];
   $data =$_POST['data'];
   $proj = $_POST['proj'];
   $arq = $_POST['arq'];
   $user = $_SESSION['IdCadastro'];

   $delBackup="delete from backup where IdBackup={$id}";
   mysqli_query($con, $delBackup);
   header ('location:backup.php');   

}

$IdBackup = $_GET['IdBackup'];
$dataBackup = $_GET['dataBackup'];
$usuario = $_GET['fk_IdCadastro'];

$sqlGetBack="select * from backup where IdBackup=($IdBackup)";
$queryBack=mysqli_query($con, $sqlGetBack);
$resultBack=mysqli_fetch_assoc($queryBack);

?>