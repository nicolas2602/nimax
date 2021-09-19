<?php 
include 'conexao.php';
include 'select2.php';

if(isset($_POST['up'])){
    $id = $_POST['id'];
    $nome=$_POST['nomeEmp'];
    $serv=$_POST['tserv'];
    $end=$_POST['ende'];
    $bairro=$_POST['bairro'];
    $city=$_POST['city'];
    $estado=$_POST['est'];
    $parc=$_POST['parc'];

 
     $upEmp="update empresa_cliente set nomeEmpresa='$nome',tservico='$serv',endereco='$end',bairro='$bairro',cidade_empresa='$city',estado_empresa='$estado',parceria='$parc'
                where IdEmpresa={$id} and fk_IdCadastro='$_SESSION[IdCadastro]'";        
         mysqli_query($con, $upEmp);
         header ('location:empresa.php');    

 }
 
?>