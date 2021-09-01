<?php
    include 'php/conexao.php';
    include 'php/select2.php';
    include 'php/insert_pag.php';
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
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 
  <?php include 'include/navbar.php' ?>
  <?php include 'include/menu.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Planos</h1>
          </div>
          <div class="col-sm-6">
             <?php include 'include/tempo.php'; ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
    <form method="POST" enctype="multipart/form-data">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Plano Bronze
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h5 class="lead"><b>Standart</b></h5>
                      <p class="text-muted text-sm"><b>R$ 60,00 </b></p>
                    </div>
                    <div class="col-5 text-center">
                      <img src="imagem/bronze.png" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                        <button type="button" class="btn btn-danger toastsDefaultDanger">
                            Sobre
                        </button>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                Plano Prata
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Prime</b></h2>
                      <p class="text-muted text-sm"><b>R$ 120,00</b></p>
                    </div>
                    <div class="col-5 text-center">
                      <img src="imagem/prata.png" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                     
                    <button type="button" class="btn btn-secondary toastsDefaultInfo">
                      Sobre
                    </button>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                Plano Ouro
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Premium</b></h2>
                      <p class="text-muted text-sm"><b>R$ 200,00</b></p>
                    </div>
                    <div class="col-5 text-center">
                      <img src="imagem/ouro.png" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <button type="button" class="btn btn-warning toastsDefaultWarning">
                      Sobre
                    </button>
                  </div>
                </div>
  
              </div><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                  Selecione um plano
                </button><br>
             <?php include 'include/modal_planos.php' ?>
            </div>
           
                
    
        
      </div>
      <!-- /.card -->
</form>
    </section>

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
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
    $(function() {
        var Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });

      $('.toastsDefaultDanger').click(function() {
            $(document).Toasts('create', {
              class: 'bg-danger',
              title: 'Standart',
              subtitle: 'Sobre',
              body: '<li>Programa de monitoramento</li><li>Programa de escaneamento</li><li>Criptografia e backup</li>'
            })
          });
      $('.toastsDefaultInfo').click(function() {
            $(document).Toasts('create', {
              class: 'bg-secondary',
              title: 'Prime',
              subtitle: 'Sobre',
              body: '<li>Programa de escaneamento</li><li>Suporte especial e técnico</li><li>Sem limite de dados de backups</li>'
            })
          });
      $('.toastsDefaultWarning').click(function() {
        $(document).Toasts('create', {
          class: 'bg-warning',
          title: 'Premium',
          subtitle: 'Sobre',
          body: '<li>Todas as anteriores (Standart e Premium)</li><li>Programa de ajuda e suporte</li>'
        })
      });
  });
</script>
</body>
</html>
