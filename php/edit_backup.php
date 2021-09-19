<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['upBack'])){
   $id=$_POST['id'];
   $proj = $_POST['proj'];
   $user = $_SESSION['IdCadastro'];

   $upBackup="update backup set nomeBackup='$proj' where IdBackup={$id} and fk_IdCadastro='$_SESSION[IdCadastro]'";
   mysqli_query($con, $upBackup);
   header ('location:backup.php');   

}


?>