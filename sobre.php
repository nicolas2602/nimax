<?php 
    include 'php/conexao.php';
    include 'php/select2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="imagem/NimaxL.png" />
    <title>NIMAX | Sobre</title>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
            <h1>Sobre</h1>
          </div>
          <div class="col-sm-6">
            <?php include 'include/tempo.php' ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Sobre a NIMAX</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          A NIMAX é um programa desenvolvido pela X-MAX, com o intuito de ajudar os usuários com problemas de software. Com mais eficiência e segurança.<br><br>
           <img src="imagem/logoN.png" alt="">
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          NIMAX por X-MAX
        </div>
        <!-- /.card-footer-->
      </div>

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Quem é a X-MAX?</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
           <center><img src="imagem/logo1.png" alt="X-MAX"></center><br>
            Somos uma empresa com total comprometimento
            com nossos clientes. Realizando análises, oferecendo
            nosso serviço de Help Desk e estando a disposição
            com assistentes virtuais 24 horas por dia. Também
            nos responsabilizamos com a segurança de todos os
            dados de nossos usuários. Acreditamos que com
            nosso foco e satisfação de nossos clientes,
            funcionários e colaboradores, possamos ir mais à
            frente em quesitos de segurança e confiabilidade.
            Sendo assim, nós da X-MAX, ofertamos todos os
            nossos serviços à aqueles que ainda não tiveram tal
            experiência. Obrigado!
           
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
