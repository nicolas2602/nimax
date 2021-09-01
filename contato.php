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
  <title>NIMAX | Contato</title>

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
            <h1>Contato</h1>
          </div>
          <div class="col-sm-6">
             <?php include 'include/tempo.php'; ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  Fundador da X-MAX
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h5 class="lead"><b>Nicolas H. Yonekawa</b></h5>
                      <p class="text-muted text-sm"><b>Sobre: </b> Estudante do E.M Curso Técnico UNASP-HT  </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email: nicolasyonekwa@gmail.com</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="imagem/Nicolas 17.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                Fundador da X-MAX
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Marcus V. de Andrade</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> Estudante do E.M Curso Técnico UNASP-HT  </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                         <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email: marcusagameiro@gmail.com</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="imagem/Marcus.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                Fundador da X-MAX
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b>Emmanuel Z. de Sá</b></h2>
                      <p class="text-muted text-sm"><b>Sobre: </b> Estudante do E.M Curso Técnico UNASP-HT  </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                         <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email: emmanuelzague@gmail.com</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="imagem/Manolo.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>

              </div>
            </div>
    
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

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
