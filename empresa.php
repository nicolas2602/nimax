<?php 
   include 'php/conexao.php'; 
   include 'php/insert2.php'; 
   include 'php/select2.php';
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="imagem/NimaxL.png" />
  <title>NIMAX | Dados Empresarial</title>

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
            <h1>Empresas</h1>
          </div>
          <div class="col-sm-6">
            <?php include 'include/tempo.php' ?>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form method="post" enctype="multipart/form-data">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastrar Empresa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">CNPJ</label>
                        <input type="text" name="cnpj"class="form-control" id="exampleInputEmail1" placeholder="Digite o CNPJ" required>
                      </div>
                    </div>
                  
                    <div class="col-6">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome da Empresa</label>
                        <input type="text" name="nomeEmp" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome da empresa" required>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                          <label>Tipos de serviço</label>
                          <select class="form-control select2bs4" style="width: 100%;" name="tserv" required>
                            <option selected="selected">...</option>
                                <option value="Alimentícia">Alimentícia</option>
                                <option value="Automotivo">Automotivo</option>
                                <option value="Agropecuária">Agropecuária</option>
                                <option value="Ecônomica">Ecônomica</option>
                                <option value="Turismo">Turismo</option>
                                <option value="Varejista">Varejista</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Tecnologia">Tecnologia</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço</label>
                        <input type="text" name="end" class="form-control" id="exampleInputEmail1" placeholder="Digite o endereço" required>
                      </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="exampleInputEmail1" placeholder="Digite o bairro" required>
                      </div>
                   </div>

                   <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cidade</label>
                        <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Digite o bairro" required>
                      </div>
                   </div>
                </div>

                 <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Estado</label>
                          <input type="text" name="est" class="form-control" id="exampleInputEmail1" placeholder="Digite o estado" required>
                        </div>
                     </div>

                     <div class="col-6">
                      <div class="form-group">
                          <label>Parceria</label>
                          <select class="form-control select2bs4" style="width: 100%;" name="parc" required>
                            <option selected="selected">...</option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                          </select>
                      </div>
                    </div>


                  </div>

                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1" required>
                      <label class="custom-control-label" for="exampleCheck1">Aceita os termos de política e privacidade <a href="#">da empresa</a> X-MAX.</label >
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="cad" class="btn btn-success" value="Cadastrar">
                </div>
              </form>
            </div>

          </div>
    
          <div class="col-md-6">

          </div>
       
        </div>

      </div>
    </section>

  </form>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-info">
                <h3 class="card-title">Empresas cadastradas</h3>

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
                      <th>Nome da empresa</th>
                      <th>Tipo de serviço</th>
                      <th>Cidade</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                   <?php
                      $sq=
                      "
                      select * from empresa_cliente as p
                      inner join cadastro as cp on cp.IdCadastro = P.fk_IdCadastro
                      where fk_IdCadastro='$_SESSION[IdCadastro]'
                      ";

                      $qu=mysqli_query($con,$sq);
                      while($emp2=  mysqli_fetch_assoc($qu)){
                    ?>
                  <tbody>
                    <tr>
                      <td><?php echo $emp2['IdEmpresa'] ?></td>
                      <td><?php echo $emp2['nomeEmpresa'] ?></td>
                      <td><?php echo $emp2['tservico'] ?></td>
                      <td><span class="tag tag-success"><?php echo $emp2['cidade_empresa'] ?></span></td>
                      <td><?php echo $emp2['estado_empresa'] ?></td>
                      <td>
                          <a href="up_empresa.php?IdEmpresa=<?php echo $emp2['IdEmpresa'] ?>&cnpj=<?php echo $emp2['cnpj'] ?>
                                  &nomeEmpresa=<?php echo $emp2['nomeEmpresa'] ?>&tservico=<?php echo $emp2['tservico'] ?>&endereco=<?php echo $emp2['endereco'] ?>
                                  &bairro=<?php echo $emp2['bairro'] ?>&cidade_empresa=<?php echo $emp2['cidade_empresa'] ?>&estado_empresa=<?php echo $emp2['estado_empresa'] ?>
                                  &parceria=<?php echo $emp2['parceria'] ?>&fk_IdCadastro=<?php $_SESSION['IdCadastro'] ?>" 
                              class="btn btn-primary mb-2">
                              <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="exc_empresa.php?IdEmpresa=<?php echo $emp2['IdEmpresa'] ?>&cnpj=<?php echo $emp2['cnpj'] ?>
                                  &nomeEmpresa=<?php echo $emp2['nomeEmpresa'] ?>&tservico=<?php echo $emp2['tservico'] ?>&endereco=<?php echo $emp2['endereco'] ?>
                                  &bairro=<?php echo $emp2['bairro'] ?>&cidade_empresa=<?php echo $emp2['cidade_empresa'] ?>&estado_empresa=<?php echo $emp2['estado_empresa'] ?>
                                  &parceria=<?php echo $emp2['parceria'] ?>&fk_IdCadastro=<?php echo $emp2['fk_IdCadastro'] ?>" 
                              class="btn btn-danger mb-2">
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
