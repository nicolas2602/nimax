<?php 
    include 'php/conexao.php';
    include 'php/select2.php';
    include 'php/logger.php';
    if($_SESSION['profile']=='User'){
      logMsg( "Um usuário invadiu o sistema", 'warning');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagem/NimaxL.png" />
    <title>NIMAX | Planos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
     
    <?php include 'include/navbar.php'; ?>
    <?php include 'include/menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Total de Planos</h1>
          </div>
          <div class="col-sm-6">
            <?php include 'include/tempo.php' ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-success">
                <h3 class="card-title">Usuários com Planos</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Procurar">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Foto</th>
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
                      <td>
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                          <div class="image">
                          <img src="<?php echo $stand['foto'];?>" class="img-circle elevation-2" alt="<?php echo $stand['IdCadastro'] ?>">
                          </div>
                        </div>
                      </td>
                      <td><?php echo $stand['nomeCad'] ?></td>
                      <td>
                        
                         <?php 

                           $dataN = $stand['dataCompra'];
                           echo date('d/m/Y', strtotime($dataN));

                         ?>
                    
                     </td>
                      <td><?php echo $stand['formaPag'] ?></td>
                      <td>
                        
                        <?php 
                          if($stand['nomePacote'] == "Standart"){
                             echo "<div class='badge badge-danger'>$stand[nomePacote]</div>";
                          }
                          if($stand['nomePacote'] == "Prime"){
                            echo "<div class='badge badge-secondary'>$stand[nomePacote]</div>";
                          }
                         if($stand['nomePacote'] == "Premium"){
                          echo "<div class='badge badge-warning right'>$stand[nomePacote]</div>";
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
                  <tr>
                    <th scope="row" class="table-secondary"></th>
                    <td colspan="5" align="right" class="table-secondary"><strong>TOTAL:</strong></td>
                    <td><strong>R$ <?php echo number_format($total, 2); ?></strong></td>
                </table>
              </div>
                <div class="card-footer clearfix" align="right">
                  <a href="relatorio_planos.php" class="btn btn-block btn-success btn-sm" style="width: 160px;">
                  <i class="fas fa-download"></i> Baixar Relatório
                  </a>
                </div>
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php include 'include/footer.php' ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include 'include/script.php' ?>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

</body>
</html>
