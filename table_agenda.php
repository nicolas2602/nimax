<?php 
include 'php/conexao.php';
include 'php/select2.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIMAX | Relatório de Agendas</title>
</head>

<style>
    /* body, html {
    padding: 0px;
    margin: 0px;
    border: 0px none;
    width: 100%;
    height: 100%;
    } */

    body{
        border: 1px solid black;

    }
    .alinhar{
        padding-left: 20px;
    }
    /* .color{
        background-color: silver;
        width: 500px;
        text-align: center;
        padding-left: 200px;
    } */
    ul {
        background-color: #dddddd;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;

    }

    th, td {
        padding: 10px;
    }

    th {
        background-color: #F66150;
    }

    footer {
    position: fixed;
    left: -100;
    bottom: 0;
    width: 120%;
    background-color: silver;
    text-align: center;
    }

</style>

<body>

    <div class="color" align="center">
        <h1 align="center">NIMAX</h1>
    </div>

    <HR style="background-color: silver;">
    <div class="alinhar" style="text-align: justify;">
        <p style="text-align: justify;"><h3>Relatório de Agendas</h3></P>
    </div>

    <table width="95%" border="1px" align="center">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data Marcada</th>
            <th>Horário Marcado</th>
            </tr>
        </thead>
        <?php
            $sq=
            "
            select * from agenda as p
            inner join cadastro as cp on cp.IdCadastro = P.fk_cadastro
            where fk_idProfile=2 
            ";

            $qu=mysqli_query($con,$sq);
            while($agen=  mysqli_fetch_assoc($qu)){
        ?>

        <tbody>
            <tr>
                <td><?php echo $agen['IdCadastro'] ?></td>
                <td><?php echo $agen['nomeCad'] ?></td>
                <td>
                
                    <?php 

                    $dataN = $agen['dataAgenda'];
                    echo date('d/m/Y', strtotime($dataN));

                    ?>
            
                </td>
                <td>
                
                <?php 

                    $dataN = $agen['dataAgenda'];
                    echo date('H:i', strtotime($dataN));

                ?>
            
            </td>
                    
            </tr>
        </tbody>

        <?php } ?>
        <p align="center">2021 - <b>X-MAX</b></p>
    </table>

</body>
</html>


