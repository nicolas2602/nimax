<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['upBack'])){
   $proj = $_POST['proj'];
   $data = $_POST['data'];
   $user = $_SESSION['IdCadastro'];

    $sqlGetBackup="select * from backup where fk_IdCdastro='$user'";
    $queryGetBackup= mysqli_query($con, $sqlGetBackup);
    $resultBackup=mysqli_fetch_assoc($queryGetBackup);


        $ExisteBackup = isset($resultBackup);    
        if(isset($resultBackup)){
            
            $sqlUpdate = "
            UPDATE backup set nomeBackup='$proj', dataBackup='$data'
            WHERE fk_IdCadastro='$user';
            ";
        }
        mysqli_query($con, $sqlUpdate);

}

?>