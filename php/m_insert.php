<?php 
   
   include 'conexao.php';
   include 'select2.php';

   if(isset($_POST['marc'])){
    
    $time = $_POST['time'];
    $user = (int)$_POST['idusuario'];

    $sqlGetAgenda="select * from agenda where fk_cadastro='$user'";
    $queryGetAgenda= mysqli_query($con, $sqlGetAgenda);
    $resultAgenda=mysqli_fetch_assoc($queryGetAgenda);

    $ExisteAgenda = isset($resultAgenda);    
    if(isset($resultAgenda)){
        
        $sqlAddOrUpdate = "
        UPDATE compra_produto set dataAgenda='$time'
        WHERE fk_cadastro='$user';
        ";

    }else{
        $sqlAddOrUpdate  = "
        INSERT INTO agenda (fk_cadastro,dataAgenda) 
        VALUES ('$user','$time');
        ";
    }

    mysqli_query($con, $sqlAddOrUpdate);
   }

?>