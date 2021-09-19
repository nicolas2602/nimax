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
?>