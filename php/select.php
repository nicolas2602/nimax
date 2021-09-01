<?php
include 'conexao.php';
include 'logger.php';

if(isset($_POST['log'])){
    $email=$_POST['email'];
    $senha=base64_encode($_POST['senha']);
    $s= 
    "
    select * from cadastro
    where email='$email' and senha= '$senha'
    ";   
    $qu= mysqli_query($con, $s);
   
    // 0 = true: Desbloqueia a conta do usuário
    // 1 = false: Bloqueia a conta do usuário


   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['IdCadastro']=$f['IdCadastro'];
      // $_SESSION['IdLogging']=$f['IdLogging'];
    //   $_SESSION['profile']=$f['nameProfile'];
      header ('location:dashboard.php');

     logMsg( "Entrou em login" );
   }
   
   else{
       echo 
       "<script>alert('Email e Senha Incorretos')</script>";
   }
  
}
?>