<?php 
   
    include 'conexao.php';
        
    // $s="select * from registro 
    // as r inner join profile_reg as p on P.idProfile = r.fk_idProfile
    // where IdRegistro='$_SESSION[IdRegistro]'";

    $s="select * from cadastro
    as r inner join empresa_cliente as p on P.fk_IdCadastro = r.IdCadastro
    where IdCadastro='$_SESSION[IdCadastro]'";
    $qu= mysqli_query($con, $s);
    $f= mysqli_fetch_assoc($qu);

?>