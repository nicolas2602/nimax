<?php
include 'conexao.php';
include 'logger.php';

if(isset($_POST['log'])){
    $email=$_POST['email'];
    $senha=base64_encode($_POST['senha']);
    $s= 
    "
    select * from cadastro
    as r inner join profile_cad as p on P.idProfile = r.fk_idProfile
    where email='$email' and senha= '$senha' and status_user=0
    ";   
    $qu= mysqli_query($con, $s);
   
    // 0 = true: Desbloqueia a conta do usuário
    // 1 = false: Bloqueia a conta do usuário


   if(mysqli_num_rows($qu)>0){
      $f= mysqli_fetch_assoc($qu);
      $_SESSION['IdCadastro']=$f['IdCadastro'];
      $_SESSION['profile']=$f['nameProfile'];
      header ('location: profile.php');

     logMsg( "Entrou em login" );

     if($f['status_user'] == 1){
        echo 
        "<script>alert('Sua conta foi bloqueada!')</script>";
     }

   }

   else{
       echo 
       "<script>alert('Email e Senha Incorretos')</script>";
   }
  
}
?>