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
    header('location:empresa.php');

}

?>