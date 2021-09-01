<?php
    include 'conexao.php';

        $s="select * from logging where IdLogging='$_SESSION[IdLogging]'";
        $qu= mysqli_query($con, $s);
        $f= mysqli_fetch_assoc($qu);
    
?>