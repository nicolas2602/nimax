<?php 
    include 'php/conexao.php';
    include 'php/select2.php';
    include 'php/m_insert_admin.php';
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
  <link rel="icon" href="imagem/NimaxL.png" />
  <title>NIMAX | Marcar Agenda</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>

<script>
   
   function excAgd(){
     window.alert("Agenda excluída!");
   }

</script>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
  <?php include 'include/navbar.php' ?>
  <?php include 'include/menu.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agenda</h1>
          </div>
          <div class="col-sm-6">
            <?php include 'include/tempo.php'; ?>
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
                <h3 class='card-title'>Marcar Agenda</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="search" name="table_search" class="form-control float-right" placeholder="Procurar">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default" name="pesq">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Data e Hora</th>
                      <th>Problema</th>
                      <th>Marcar</th>    
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql="select * from cadastro as rp
                      inner join problema as r on r.fk_cadastro = rp.IdCadastro
                      left  join agenda as p on p.fk_cadastro = rp.IdCadastro
                      order by IdProblema DESC
                      ";
                      $qu=mysqli_query($con,$sql);
                      while($agenda2=  mysqli_fetch_assoc($qu)){
                    ?>
                    <tr>
                      <td> <?php echo $agenda2['IdCadastro']?> </td>
                      <td><?php echo $agenda2['nomeCad']?></td>
                      <td>
                        
                        <?php 
                            $dataProblema = $agenda2['dataProblema'];
                            echo date('d/m/Y H:i:s', strtotime($dataProblema));
                        ?>

                     </td>

                      <td><span class="tag tag-success"><?php echo $agenda2['descProblema']?></span></td>
                    <form method="POST" enctype="multipart/form-data">
                      <td>                      
                        <div class="input-group input-group-sm">
                          <input type="datetime-local" class="form-control" name="time2" value="<?= $agenda2['dataAgenda']; ?>" required>
                          <input type="hidden" name="idusuario" value="<?= $agenda2['IdCadastro']; ?>">
                          <input type="hidden" name="id" value="<?= $agenda2['IdAgenda']; ?>">
                            <span class="input-group-append">
                              <button type="submit" name="marc2" class="btn btn-success btn-flat">
                                <i class="fas fa-check"></i>
                              </button>
                            </span>        
                        </div> 
                      </td>
                    </form>
                    </tr>
                     
                    <tr class="expandable-body bg-light">
                        <td colspan="5">
                          <p>
                            <b>Descrição de <?php echo $agenda2['nomeCad']?>:</b><br/>
                          <?php echo $agenda2['msgProblema']?>
                          </p>
                        </td>
                      </tr>

                      <?php
                        }
                      ?>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-success">
                <h3 class="card-title">Agenda Marcada</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Usuário</th>
                      <th>Data marcada</th>
                      <th>Horário marcado</th>
                    </tr>
                  </thead>
                  <tbody>

                      <?php 
                        $sql2="select * from agenda as cp 
                        inner join cadastro as c on c.IdCadastro = cp.fk_cadastro
                        order by dataAgenda
                        ";
                        $qu2=mysqli_query($con,$sql2);
                        while($am2= mysqli_fetch_assoc($qu2)){
                      
                      ?>

                    <tr>
                    <td><?php echo $am2['IdAgenda']?></td>
                      <td><?php echo $am2['nomeCad']?></td>
                      <td><?php  
                            $dataAgenda = $am2['dataAgenda'];
                            echo date('d/m/Y', strtotime($dataAgenda));
                          ?>
                      </td>
                      <td><?php  
                            $dataAgenda = $am2['dataAgenda'];
                            echo date('H:i:s', strtotime($dataAgenda));
                          ?>
                      </td>
                      <td>
                              
                         <a href="excluir_agd_admin.php?del=<?php echo $am2['IdAgenda'] ?>&<?php echo $am2['fk_cadastro'] ?>
                                &<?php echo $am2['dataAgenda'] ?>"
                                class="btn btn-danger" onclick="excAgd()">
                                <i class="fas fa-trash-alt"></i>
                        </a> 

                      </td>
                    
                    </tr>
                    <?php } ?>
                  </tbody>
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

  <aside class="control-sidebar control-sidebar-dark">
  </aside>

</div>

<?php include 'include/script.php'; ?>

</body>
</html>