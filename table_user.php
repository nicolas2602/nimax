<?php 
include 'php/conexao.php';
include 'php/select2.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagem/NimaxL.png" />
    <title>NIMAX | Relatório de Usuários</title>

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
        background-color: #A9E0F1;
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
   
    <!-- <img src="/imagem/logo1.png" alt="" align="center"> -->
  <div class="color" align="center">
     <h1 align="center">NIMAX</h1>
  </div>
    
   <HR style="background-color: silver;">
            <div class="alinhar" style="text-align: justify;">
               <p style="text-align: justify;"><h3>Relatório de Usuários</h3></P>
            </div>
    
    <table width="95%" border="1px" align="center">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Gênero</th>
            <th>CPF</th>
            <th>CEP</th>
            </tr>
        </thead>
        <?php
            $sq=
            "
            select * from cadastro where fk_idProfile=2
            ";

            $qu=mysqli_query($con,$sq);
            while($cad=  mysqli_fetch_assoc($qu)){
            ?>
        <tbody>
            <tr>
            <td><?php echo $cad['IdCadastro'] ?></td>
            <td><?php echo $cad['nomeCad'] ?></td>
            <td>
                
                <?php 

                $dataN = $cad['dataN'];
                echo date('d/m/Y', strtotime($dataN));

                ?>
            
            </td>
            <td><?php echo $cad['genero'] ?></td>
            <td><?php echo $cad['cpf'] ?></td>
            <td><?php echo $cad['cep'] ?></td>
            </tr>
        </tbody>
        <?php } ?>
        <p align="center">2021 - <b>X-MAX</b></p>
    </table>
<!--     
    <footer>
        <p>2021 - <b>X-MAX</b></p>
    </footer> -->
    
</body>
</html>