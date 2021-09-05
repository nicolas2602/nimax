<?php
    include 'php/conexao.php';
    include 'php/select2.php';
    include 'php/edit.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="imagem/NimaxL.png" />
  <title>NIMAX | Perfil</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function previewFile(input){
                var file = $("input[type=file]").get(0).files[0];

                if(file){
                    var reader = new FileReader();

                    reader.onload = function(){
                        $("#previewImg").attr("src", reader.result);
                    }

                    reader.readAsDataURL(file);
                }
            }
        </script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <?php include 'include/navbar.php' ?>
  <?php include 'include/menu.php' ?>

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
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
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" id="previewImg"
                       src="<?php echo $f['foto'];?>"
                       alt="User profile picture">

                </div>

                <h3 class="profile-username text-center"><?php echo $f['nomeCad'];?></h3>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informações</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                <strong><i class="fas fa-map-marker-alt mr-1"></i> Localização</strong>

                <p class="text-muted"><?php echo $f['cidade'];?>, <?php echo $f['estado'];?></p>



                <hr>

                <strong><i class="fas fa-calendar mr-1"></i> Data de Nascimento</strong>

                <p class="text-muted">
                  <?php
                    $dataN = $f['dataN'];
                    echo date('d/m/Y', strtotime($dataN));
                  ?>
                </p>

                <hr>

                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                <p class="text-muted"><?php echo $f['email'];?></p>
                  
                <hr>

                <strong><i class="fas fa-phone mr-1"></i> Telefone</strong>
                <p class="text-muted"><?php echo $f['tel1'];?></p>


              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Mensagem</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Configuração</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                

                 

                  <div class="tab-pane" id="timeline">
                  <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header bg-primary">
                      <h3 class="card-title">Suas mensagens</h3>

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
                      <table class="table table-head-fixed text-nowrap ">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Data</th>
                          </tr>
                        </thead>
                          <?php 
                            $sql="select * from problema 
                            as c inner join cadastro as r on IdCadastro = c.fk_cadastro
                            where IdCadastro='$_SESSION[IdCadastro]' order by IdProblema DESC";
                            $qu=mysqli_query($con,$sql);
                            while($msg=  mysqli_fetch_assoc($qu)){
                          
                          ?>
                        <tbody>
                          <tr>
                            <td><?php echo $msg['nomeCad'] ?></td>
                            <td>
                              <?php 
                                $dataProblema = $msg['dataProblema'];
                                echo date('d/m/Y H:i:s', strtotime($dataProblema));
                             ?>
                           </td>
                           <td>

                           <a href="edit_bo.php?IdProblema=<?php echo $msg['IdProblema'] ?>&dataProblema=<?php echo $msg['dataProblema'] ?>
                                &descProblema=<?php echo $msg['descProblema'] ?>&msgProblema=<?php echo $msg['msgProblema'] ?>
                                &fk_cadastro=<?php echo $msg['fk_cadastro'] ?>"
                                class="btn btn-primary">
                                <i class="fas fa-pencil-alt"></i>
                           </a> 

                              
                           <a href="del_msg.php?del=<?php echo $msg['IdProblema'] ?>&<?php echo $msg['dataProblema'] ?>
                                &<?php echo $msg['descProblema'] ?>&<?php echo $msg['msgProblema'] ?>&<?php echo $msg['fk_cadastro'] ?>"
                                class="btn btn-danger" onclick="return confirm('Deseja apagar a mensagem?')">
                                <i class="fas fa-trash-alt"></i>
                           </a> 


                           </td>
                          </tr>
                          <tr class="expandable-body bg-light">
                              <td colspan="5">
                                <p>
                                  <b>Sua mensagem:</b><br/>
                                <?php echo $msg['msgProblema']?>
                                </p>
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
            </div>
                  

                

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nome" id="inputName" value="<?php echo $f['nomeCad'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Data de Nascimento</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" name="dataN" id="nome" value="<?php echo $f['dataN'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Cidade</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="city" id="inputSkills" value="<?php echo $f['cidade'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="est" id="inputSkills" value="<?php echo $f['estado'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo $f['email'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Telefone:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="tel" id="inputName2" value="<?php echo $f['tel1'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Telefone 2</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="tel2" id="inputSkills" value="<?php echo $f['tel2'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="f1" id="file" value="<?php echo $f['foto'];?>"
                             onchange="previewFile(this);">
                            <label class="custom-file-label" for="customFile"><?php echo $f['foto'];?></label>
                          </div>
                          <input type="hidden" name="img1" id="upload" value="<?php echo $f['foto']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Deseja atualizar o seu perfil?</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="up" class="btn btn-primary">Atualizar</button>
                          <a href="delete.php" class="btn btn-danger" onclick="return confirm('Deseja excluir a sua conta?***Antes de excluir, verifique se está vazio no botão Limpar***')">Excluir</a>

                          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-danger">
                            Limpar
                          </button>

                          <div class="modal fade col-12" id="modal-danger">
                            <div class="modal-dialog">
                              <div class="modal-content ">
                                <div class="modal-header bg-danger">
                                  <h4 class="modal-title">Limpeza de Cache</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                      <div class="card">
                                        <div class="card-header">
                                          <h3 class="card-title">Limpeza</h3>
                                        </div>
                                        <!-- ./card-header -->
                                        <div class="card-body">
                                          <table class="table table-bordered table-hover">
                                            <thead>
                                              <tr>
                                                <th>Código</th>
                                                <th>Data</th>
                                              </tr>
                                            </thead>

                                              <?php
                                                $sq="select * from logging where fk_cadastro='$_SESSION[IdCadastro]'";
                                                $qu=mysqli_query($con,$sq);
                                                while($log=  mysqli_fetch_assoc($qu)){
                                              ?>

                                            <tbody>
                                              <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><?php echo $log['IdLogging'] ?></td>
                                                <td>
                                                <?php 
                                                    $dataLogging = $log['dateLogging'];
                                                    echo date('d/m/Y H:i:s', strtotime($dataLogging));
                                                ?>
                                                </td>
                                                <td>
                                                  <a href="delete_log.php?del=<?php echo $log['IdLogging']?>
                                                    &<?php echo $log['dateLogging']?>&<?php echo $log['IdLogging']?>
                                                    &<?php echo $log['level']?>&<?php echo $log['msg']?>
                                                    &<?php echo $log['fk_cadastro']?>" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                  </a>
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
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>

                        </div>
                      </div>
                    </form>
                  </div>
                  
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
