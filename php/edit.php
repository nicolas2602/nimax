<?php

include 'conexao.php';

if(isset($_POST['up'])){
    $nome=$_POST['nome'];
    $dataN=$_POST['dataN'];
    $city=$_POST['city'];
    $estado=$_POST['est'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $tel2=$_POST['tel2'];

    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'], "imagem/".$_FILES['f1']['name']);
        $img="imagem/".$_FILES['f1']['name'];
    }
    else{
        $img=$_POST['img1'];
    }

        $upPerfil="update cadastro set nomeCad='$nome',dataN='$dataN',cidade='$city',estado='$estado',tel1='$tel',tel2='$tel2',email='$email',foto='$img' 
            where IdCadastro='$_SESSION[IdCadastro]'";
        mysqli_query($con, $upPerfil);
        header('location:profile.php');
    

}

    $s="select * from cadastro where IdCadastro='$_SESSION[IdCadastro]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

?> 