<?php 

include 'conexao.php';
include 'select2.php';

if(isset($_POST['sub'])){
   $bo=$_POST['bo'];
   $msg=$_POST['msg'];
   $user=$_SESSION['IdCadastro'];

  $insertBo = "insert into problema(descProblema,msgProblema,fk_cadastro) values ('$bo','$msg','$user')";

   mysqli_query($con, $insertBo);

       if($insertBo){
        header('location: bo.php');
    }

}


?> 