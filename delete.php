<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from agenda where fk_cadastro = '$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
?>

<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from backup where fk_IdCadastro = '$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
?>

<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from compra where fk_IdCadastro = '$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
?>

<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from empresa_cliente where fk_IdCadastro = '$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
?>

<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from paga_pacote where fk_IdCadastro = '$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
?>

<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from problema where fk_cadastro = '$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
?>

<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from logging where fk_cadastro = '$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
?>

<?php
include 'php/conexao.php';
include 'php/select2.php';

$sq="delete from cadastro where IdCadastro='$_SESSION[IdCadastro]'";
mysqli_query($con,$sq);
// header('location:index.php');
?>