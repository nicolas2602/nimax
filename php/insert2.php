<?php 
include 'conexao.php';
include 'select2.php';
include 'logger.php';

if(isset($_POST['cad'])){
    $cnpj=$_POST['cnpj'];
    $nome=$_POST['nomeEmp'];
    $serv=$_POST['tserv'];
    $end=$_POST['end'];
    $bairro=$_POST['bairro'];
    $city=$_POST['city'];
    $estado=$_POST['est'];
    $parc=$_POST['parc'];
    $user=$_SESSION['IdCadastro'];

 
     $insertEmp="insert into empresa_cliente(cnpj,nomeEmpresa,tservico,endereco,bairro,cidade_empresa,estado_empresa,parceria,fk_IdCadastro) 
         values ('$cnpj','$nome','$serv','$end','$bairro','$city','$estado','$parc','$user')";
                 
         mysqli_query($con, $insertEmp);
         

         if($insertEmp){
            header ('location:empresa.php');    
           logMsg( "Novo empresa" );
        }
 }



?>