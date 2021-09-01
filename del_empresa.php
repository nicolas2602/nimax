<?php
include 'php/conexao.php';
include 'php/select2.php';

if(isset($_POST['del'])){
    $id = $_POST['id'];
    $cnpj = $_POST['cnpj'];
    $nome=$_POST['nomeEmp'];
    $serv=$_POST['tserv'];
    $end=$_POST['end'];
    $bairro=$_POST['bairro'];
    $city=$_POST['city'];
    $estado=$_POST['est'];
    $parc=$_POST['parc'];
    $user=$_SESSION['IdCadastro'];

    $del="delete from empresa_cliente where IdEmpresa={$id}";
    mysqli_query($con, $del);
    header('location:dashboard.php');

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