<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['conc'])){  
   $pag = $_POST['pag_pac'];
   $assinante = $_SESSION['IdCadastro'];
   
    $sql = "select * from compra where fk_IdCadastro='$assinante'";
    $query = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($query) < 1){
        $insertComp="insert into compra(fk_IdPagamento, fk_IdCadastro) value ('$pag','$assinante')";
        mysqli_query($con, $insertComp);
        echo"<script>alert('Compra concluída!')</script>";
    }
    else{
        echo"<script>alert('Você já concluiu a compra!')</script>";
    }
}
?>