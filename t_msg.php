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
    <title>NIMAX | Mensagens</title>

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
            <h1>Total de mensagens</h1>
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
              <div class="card-header bg-primary">
                <h3 class="card-title">Mensagens</h3>

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
                      <th>Gênero</th>
                      <th>CPF</th>
                      <th>CEP</th>
                    </tr>
                  </thead>
                  <?php
                      $sq=
                      "
                      select * from cadastro as rp
                      inner join problema as r on r.fk_cadastro = rp.IdCadastro
                      where fk_idProfile=2 order by IdProblema DESC
                      ";

                      $qu=mysqli_query($con,$sq);
                      while($msg=  mysqli_fetch_assoc($qu)){
                    ?>
                  <tbody>
                    <tr>
                      <td><?php echo $msg['IdCadastro'] ?></td>
                      <td>
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                          <div class="image">
                          <img src="<?php echo $msg['foto'];?>" class="img-circle elevation-2" alt="<?php echo $msg['IdCadastro'] ?>">
                          </div>
                        </div>
                      </td>
                      <td><?php echo $msg['nomeCad'] ?></td>
                      <td>
                        
                         <?php 

                           $dataN = $msg['dataN'];
                           echo date('d/m/Y', strtotime($dataN));

                         ?>
                    
                     </td>
                      <td><?php echo $msg['genero'] ?></td>
                      <td><?php echo $msg['cpf'] ?></td>
                      <td><?php echo $msg['cep'] ?></td>
                      <tr class="expandable-body bg-light">
                        <td colspan="8">
                          <p>
                            <b>Mensagem de <?php echo $msg['nomeCad']?>:</b><br/>
                          <?php echo $msg['msgProblema']?>
                          </p>
                        </td>
                      </tr>
                         
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
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
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

</body>
</html>
