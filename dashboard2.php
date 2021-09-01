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
    <link rel="shortcut icon" href="imagem/NimaxL.png" />
    <title>NIMAX | Painel de Lucro</title>
      <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
   <?php include 'include/navbar.php'; ?>
   <?php include 'include/menu.php'; ?>

     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Painel de Lucros</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <?php include 'include/tempo.php'; ?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                
                <?php 
                            $sq="select IdPagamento from paga_pacote where fk_IdPacote=1 order by IdPagamento";
                            $qu=mysqli_query($con,$sq);
                            $row=mysqli_num_rows($qu);
                            
                            echo"<h3>$row</h3>";
                  ?>

                <p>Total de Standart</p>
              </div>
              <div class="icon">
              <i class="fas fa-sun"></i>
              </div>
              <a href="#" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">

                 <?php 
                    $sq="select IdPagamento from paga_pacote 
                    inner join pacote as r on r.IdPacote = fk_IdPacote
                    where fk_IdPacote=2 order by IdPagamento";
                    $qu=mysqli_query($con,$sq);
                    $row=mysqli_num_rows($qu);
                    
                    echo"<h3>$row</h3>";
                ?>

                <p>Total de Prime</p>
              </div>
              <div class="icon">
              <i class="fas fa-sun"></i>
              </div>
              <a href="#" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">

                 <?php 
                    $sq="select IdPagamento from paga_pacote where fk_IdPacote=3 order by IdPagamento";
                    $qu=mysqli_query($con,$sq);
                    $row=mysqli_num_rows($qu);
                    
                    echo"<h3>$row</h3>";
                ?>

                <p>Total de Premium</p>
              </div>
              <div class="icon">
              <i class="fas fa-sun"></i>
              </div>
              <a href="#" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
 
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                  <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                      var data = google.visualization.arrayToDataTable([
                        ['Plano', 'Quantidade'],
                        <?php 
                          $sq="select IdPagamento from paga_pacote where fk_IdPacote=2 order by IdPagamento";
                          $qu=mysqli_query($con,$sq);
                          $row=mysqli_num_rows($qu);
                          
                          echo"['Prime', $row],";
                        ?>
                      <?php 
                          $sq="select IdPagamento from paga_pacote where fk_IdPacote=1 order by IdPagamento";
                          $qu=mysqli_query($con,$sq);
                          $row=mysqli_num_rows($qu);
                          
                          echo"['Standart', $row],";
                      ?>
                      <?php 
                          $sq="select IdPagamento from paga_pacote where fk_IdPacote=3 order by IdPagamento";
                          $qu=mysqli_query($con,$sq);
                          $row=mysqli_num_rows($qu);
                          
                          echo"['Premium', $row]";
                      ?>
                      ]);

                      var options = {
                        title: 'Gráfico de Planos',
                        backgroundColor: '#33FF70'
                      };

                      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                      chart.draw(data, options);
                    }
                  </script>
                   <div id="piechart" style="width: 1190px; height: 450px"></div>

                  
                </div>  
              </div>
            </div>
          </section><br>

              <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
          </section>
    <!-- /.content -->
  </div>
    
    <?php include 'include/footer.php' ?>

</div>

<?php include 'include/script.php' ?>

</body>
</html>