<?php 
include 'conexao.php';
include 'select2.php';

if(isset($_POST['up'])){
    $nome=$_POST['nomeEmp'];
    $serv=$_POST['tserv'];
    $end=$_POST['end'];
    $bairro=$_POST['bairro'];
    $city=$_POST['city'];
    $estado=$_POST['est'];
    $parc=$_POST['parc'];
    $user=$_SESSION['IdCadastro'];

 
     $upEmp="update empresa_cliente set nomeEmpresa='$nome',tservico='$serv',endereco='$end',bairro='$bairro',cidade_empresa='$city',estado_empresa='$estado',parceria='$parc'
                where fk_IdCadastro='$user'";        
         mysqli_query($con, $upEmp);
         header ('location:empresa.php');    

 }
 
 $IdEmpresa= $_GET['IdEmpresa'];
 $cnpj= $_GET['cnpj'];
 $name= $_GET['nomeEmpresa'];
 $servic= $_GET['tservico'];
 $ende= $_GET['endereco'];
 $bair= $_GET['bairro'];
 $cidade= $_GET['cidade_empresa'];
 $esta= $_GET['estado_empresa'];
 $parce= $_GET['parceria'];
 $cliente= $_GET['fk_IdCadastro'];
 
 $sqlGetEmp="select * from empresa_cliente where IdEmpresa=($IdEmpresa)";
 $queryEmp=mysqli_query($con, $sqlGetEmp);
 $resultEmp=mysqli_fetch_assoc($queryEmp);


?>