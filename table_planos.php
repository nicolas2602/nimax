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
    <title>NIMAX | Relatório de Planos</title>
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
        background-color: #adebad;
    }
    #total{
        background-color: #adebad;
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
        <p style="text-align: justify;"><h3>Relatório de Planos</h3></P>
    </div>

    <table width="95%" border="1px" align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Forma de Pagamento</th>
                <th>Planos</th>
                <th>Preço</th>
            </tr>
        </thead>
            <?php
                $total = 0;
                $sq=
                "
                select * from paga_pacote as rtc
                inner join compra as c on c.fk_IdPagamento = rtc.IdPagamento
                inner join cadastro as t on t.IdCadastro = rtc.fk_IdCadastro
                inner join pacote as r on r.IdPacote= rtc.fk_IdPacote
                ";

                $qu=mysqli_query($con,$sq);
                while($stand=  mysqli_fetch_assoc($qu)){
            ?>

        <tbody>
            <tr>
                <td><?php echo $stand['IdCadastro'] ?></td>
                <td><?php echo $stand['nomeCad'] ?></td>
                <td>
                
                    <?php 

                        $dataN = $stand['dataCompra'];
                        echo date('d/m/Y', strtotime($dataN));

                    ?>
                </td>
                <td><?php echo $stand['formaPag'] ?> </td>
                <td>
                        
                        <?php 
                          if($stand['nomePacote'] == "Standart"){
                             echo "<label color='red'>$stand[nomePacote]</label>";
                          }
                          if($stand['nomePacote'] == "Prime"){
                            echo "<label color='silver'>$stand[nomePacote]</label";
                          }
                         if($stand['nomePacote'] == "Premium"){
                          echo "<label color='yellow'>$stand[nomePacote]</label";
                          }
                        ?>
                    
                </td>
                <td>R$ <?php echo $stand['preco'] ?></td>
            </tr>
        </tbody>

        <?php 
        
            if($stand['preco']){
                $total = $total + ($stand['preco']);
                } 
            } 
        
        ?>
        <td colspan="5" align="right" id="total"><strong>TOTAL:</strong></td>
        <td><strong>R$ <?php echo number_format($total, 2); ?></strong></td>

        <p align="center">2021 - <b>X-MAX</b></p>
    </table>

</body>
</html>