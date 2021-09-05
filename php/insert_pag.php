<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['conc'])){  
    $pag=$_POST['pag'];
    $pac=$_POST['pac'];
    $cliente=$_SESSION['IdCadastro'];

       $insert="insert into paga_pacote(formaPag,fk_IdPacote,fk_IdCadastro) 
                               value ('$pag','$pac','$cliente')";
       mysqli_query($con, $insert);

       if($insert){
        header('location: info_planos.php');
}
}
?>