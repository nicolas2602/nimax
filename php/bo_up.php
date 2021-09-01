<?php 

include 'conexao.php';
include 'select2.php';

    if(isset($_POST['up'])){
    $bo=$_POST['bo'];
    $msg=$_POST['msg'];
    $user=$_SESSION['IdCadastro'];

    $upBo = "update problema set descProblema='$bo',msgProblema='$msg' where fk_cadastro='$user'";

    mysqli_query($con, $upBo);
    header('location: profile.php');

    }

    $IdProblema = $_GET['IdProblema'];
    $data = $_GET['dataProblema'];
    $desc = $_GET['descProblema'];
    $msg = $_GET['msgProblema'];
    $user = $_GET['fk_cadastro'];

    $sqlGetProb="select * from problema where IdProblema=($IdProblema)";
    $queryProb=mysqli_query($con, $sqlGetProb);
    $resultProb=mysqli_fetch_assoc($queryProb);

?> 