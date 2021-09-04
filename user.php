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
    <title>NIMAX | Usuários</title>

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
            <h1>Total de Usuários</h1>
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
              <div class="card-header bg-info">
                <h3 class="card-title">Usuários Cadastrados</h3>

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
                      <th>Status</th>
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
                      <td>
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                          <div class="image">
                          <img src="<?php echo $cad['foto'];?>" class="img-circle elevation-2" alt="<?php echo $cad['IdCadastro'] ?>">
                          </div>
                        </div>
                      </td>
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
                      <td>
                        <?php
                          if($cad['status_user'] == 0){
                            echo "<div class='badge badge-success'>Ativado</div>";
                          }
                          if($cad['status_user'] == 1){
                            echo "<div class='badge badge-danger'>Desativado</div>";
                          }
                      ?>
                      </td>
                      <td>
                        <?php
                        if($cad['status_user'] == 1){
                          echo " <a class='btn btn-success' href='ativar_user.php?act=$cad[IdCadastro]' onclick='return confirm(Desativar a conta do usuário?)'>
                            ON
                          </a>";
                        }
                        if($cad['status_user'] == 0){
                          echo " <a class='btn btn-danger' href='desativar_user.php?dct=$cad[IdCadastro]' onclick='return confirm(Ativar a conta do usuário?)'>
                           OFF
                          </a>";
                        }
                        
                        ?>
                         
                      </td>
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
