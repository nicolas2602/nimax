<?php 
   include 'php/conexao.php'; 
   include 'php/select2.php';
   include 'php/insert_comp.php';
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="imagem/NimaxL.png" />
  <title>NIMAX | Dados Planos</title>

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
            <h1>Dados de assinatura</h1>
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-info">
                <h3 class="card-title">Confirmar o pagamento</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Plano</th>
                      <th>Valor</th>
                      <th>Forma Pagamento</th>
                    </tr>
                  </thead>
                   <?php
                      $sq=
                      "
                      select * from paga_pacote as cpt
                      inner join cadastro as p on p.IdCadastro = cpt.fk_IdCadastro
                      inner join pacote as c on c.IdPacote= cpt.fk_IdPacote
                      where fk_IdCadastro='$_SESSION[IdCadastro]'
                      ";

                      $qu=mysqli_query($con,$sq);
                      while($pla2=  mysqli_fetch_assoc($qu)){
                    ?>
                  <tbody>
                    <tr>
                      <td><?php echo $pla2['IdPagamento'] ?></td>
                      <td>
                        <span class="tag tag-success">
                          <?php 
                          if($pla2['nomePacote'] == "Standart"){
                             echo "<div class='badge badge-danger'>$pla2[nomePacote]</div>";
                          }
                          if($pla2['nomePacote'] == "Prime"){
                            echo "<div class='badge badge-secondary'>$pla2[nomePacote]</div>";
                          }
                         if($pla2['nomePacote'] == "Premium"){
                          echo "<div class='badge badge-warning right'>$pla2[nomePacote]</div>";
                          }
                          ?>
                        </span>
                      </td>
                      <td>R$ <?php echo $pla2['preco'] ?></td>
                      <td><?php echo $pla2['formaPag'] ?></td>
                    <form method="post" enctype="multipart/form-data">  
                      <td>

                      <a href="del_planos.php?del=<?php echo $pla2['IdPagamento'] ?>
                                &<?php echo $pla2['formaPag'] ?>&<?php echo $pla2['fk_IdPacote'] ?>&<?php echo $pla2['fk_IdCadastro'] ?>"
                                class="btn btn-danger" onclick="return confirm('Deseja cancelar o plano?')">
                                <i class="fas fa-trash-alt"></i>
                           </a> 
                      <input type="hidden" name="pag_pac" value="<?= $pla2['IdPagamento'] ?>">
                        <button type="submit" class="btn btn-success" name="conc" onclick="return confirm('Deseja concluir o pagamento?')">
                         <i class="fas fa-check"></i>
                        </button>
                      
                       
                      </td>
                    </form>
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


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'include/footer.php'; ?>

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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
