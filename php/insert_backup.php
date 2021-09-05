<?php 
include 'conexao.php';
include 'select2.php';

if(isset($_POST['save'])){
    $proj = $_POST['proj'];
    $user = $_SESSION['IdCadastro'];

    if($_FILES['f1']['name']){
        move_uploaded_file($_FILES['f1']['tmp_name'], "nuvem/".$_FILES['f1']['name']);
        $arq="nuvem/".$_FILES['f1']['name'];
    }

    $insertBackup = "insert into backup(nomeBackup,arquivoBackup,fk_IdCadastro)
                    values('$proj','$arq','$user')";

    mysqli_query($con, $insertBackup);
    header('location: backup.php');
}

?>