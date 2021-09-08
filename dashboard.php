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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagem/NimaxL.png" />
    <title>NIMAX | Painel de Usuários</title>
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
            <h1 class="m-0">Painel de Usuários | Início</h1>
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
            <div class="small-box bg-info">
              <div class="inner">
                
                <?php 
                            $sq="select * from cadastro order by IdCadastro";
                            $qu=mysqli_query($con,$sq);
                            $row=mysqli_num_rows($qu);
                            
                            echo"<h3>$row</h3>";
                  ?>

                <p>Total de Usuário</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="user.php" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

                 <?php 
                    $sq="SELECT IdLogging FROM logging order by IdLogging";
                    $qu=mysqli_query($con,$sq);
                    $row=mysqli_num_rows($qu);
                    
                    echo"<h3>$row</h3>";
                ?>

                <p>Número de acessos</p>
              </div>
              <div class="icon">
                 <i class="fas fa-clock"></i>
              </div>
              <a href="acesso.php" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">

                 <?php 
                    $sq="SELECT IdProblema FROM problema order by IdProblema";
                    $qu=mysqli_query($con,$sq);
                    $row=mysqli_num_rows($qu);
                    
                    echo"<h3>$row</h3>";
                ?>

                <p>Total de Mensagens</p>
              </div>
              <div class="icon">
                  <i class="fas fa-envelope"></i>
              </div>
              <a href="t_msg.php" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">

                 <?php 
                    $sq="SELECT IdEmpresa FROM empresa_cliente order by IdEmpresa";
                    $qu=mysqli_query($con,$sq);
                    $row=mysqli_num_rows($qu);
                    
                    echo"<h3>$row</h3>";
                ?>

                <p>Total de Empresas Cadastradas</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-building"></i>
              </div>
              <a href="t_emp.php" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">

                 <?php 
                    $sq="SELECT IdBackup FROM backup order by IdBackup";
                    $qu=mysqli_query($con,$sq);
                    $row=mysqli_num_rows($qu);
                    
                    echo"<h3>$row</h3>";
                ?>

                <p>Total de Backup</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-file-alt"></i>
              </div>
              <a href="t_backup.php" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">

                 <?php 
                    $sq="SELECT IdAgenda FROM agenda order by IdAgenda";
                    $qu=mysqli_query($con,$sq);
                    $row=mysqli_num_rows($qu);
                    
                    echo"<h3>$row</h3>";
                ?>

                <p>Agendas Pendentes</p>
              </div>
              <div class="icon">
              <i class="fas fa-calendar-alt"></i>
              </div>
              <a href="t_agenda.php" class="small-box-footer">Vizualizar <i class="fas fa-arrow-circle-right"></i></a>
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
                          ['data', 'Usuário'],
                          
                          <?php 
                          
                          $sq=" select * from logging
                          as r 
                          inner join cadastro as p on P.IdCadastro = r.fk_cadastro
                          where fk_idProfile=2
                          order by IdLogging";
                          $qu=mysqli_query($con,$sq);
                          while($item = mysqli_fetch_assoc($qu))
                          {

                              $IdLogging = $item['fk_cadastro'];
                              $data = $item['dateLogging'];
                          
                          ?>

                          ['<?php echo date('d/m/Y H:i:s', strtotime($data)); ?>', <?php echo $IdLogging ?> ],
                          <?php } ?>
                          ]);

                          var options = {
                          title: 'Estatística de Acessos',
                          curveType: 'function',
                          backgroundColor: '#e6f2ff',
                          legend: { position: 'none' }
                          };

                          var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                          chart.draw(data, options);
                        }
                   </script>
                      <div id="curve_chart" class="circle" style="width: 1190px; height: 450px"></div>

                  
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