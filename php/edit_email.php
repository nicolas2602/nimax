<?php

include 'conexao.php';
include 'select2.php';

if(isset($_POST['upEmail'])){
    $emailN=$_POST['emailN'];
    $senha=$_POST['senha'];
    $csenha=$_POST['csenha'];
    
    if($senha == $csenha){
      $senhacript = base64_encode($senha);

        $upPerfil="update cadastro set email='$emailN',senha='$senhacript' where IdCadastro='$_SESSION[IdCadastro]'";
        mysqli_query($con, $upPerfil);
        header('location:profile.php');
    }
    else{
        echo"<script>alert('Senhas não correspondem!')</script>";
    }

}

    $s="select * from cadastro where IdCadastro='$_SESSION[IdCadastro]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

?> 