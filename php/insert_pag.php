<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['conc'])){  
    $pag=$_POST['pag'];
    $pac=$_POST['pac'];
    $cliente=$_SESSION['IdCadastro'];

    $sql = "select * from paga_pacote where fk_IdCadastro='$cliente'";
    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) < 1){
        $insert="insert into paga_pacote(formaPag,fk_IdPacote,fk_IdCadastro) 
                                    value ('$pag','$pac','$cliente')";
        mysqli_query($con, $insert);
        header('location: info_planos.php');
    }else{
        echo "<script>alert('Você pode adicionar apenas uma vez!');</script>";
    }
      
}
?>