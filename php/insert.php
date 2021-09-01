<?php 
include 'conexao.php';
include 'select2.php';
include 'logger.php';

if(isset($_POST['cad'])){
    $nome=$_POST['user'];
    $dataN=$_POST['data'];
    $gen=$_POST['gen'];
    $cpf=$_POST['cpf'];
    $cep=$_POST['cep'];
    $end=$_POST['end'];
    $city=$_POST['city'];
    $estado=$_POST['est'];
    $tel=$_POST['tel'];
    $tel2=$_POST['tel2'];
    $email=$_POST['email'];
    $senha=($_POST['senha']);
    $csenha=($_POST['rsenha']);
  
    if($senha == $csenha){
          
     $senhacript = base64_encode($senha);
     // if($_FILES['f1']['name']){
     //     move_uploaded_file($_FILES['f1']['tmp_name'], "perfil/".$_FILES['f1']['name']);
     //     $img="perfil/".$_FILES['f1']['name'];
     // }
 
     $i="insert into cadastro(nomeCad,dataN,genero,cpf,cep,endereco,cidade,estado,tel1,tel2,email,senha,foto) 
         values ('$nome','$dataN','$gen','$cpf','$cep','$end','$city','$estado','$tel','$tel2','$email','$senhacript','imagem/perfil.jpg')";
                 
         mysqli_query($con, $i);
         header ('location:index.php');    
         logMsg( "Novo usuário" );
     }
     else{
         echo '<script>alert("Senhas não identificadas!")</script>';
     }
 }



?>