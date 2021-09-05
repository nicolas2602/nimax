<?php
include 'conexao.php';
include 'select2.php';

if(isset($_POST['conc'])){  
   $pag = $_POST['pag_pac'];
   $assinante = $_SESSION['IdCadastro'];
   

       $insertComp="insert into compra(fk_IdPagamento, fk_IdCadastro) value ('$pag','$assinante')";
       mysqli_query($con, $insertComp);

       if($insertComp){
        header('location: info_planos.php');
}
}
?>