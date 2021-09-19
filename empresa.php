<?php 
   include 'php/conexao.php'; 
   include 'php/insert2.php'; 
   include 'php/select2.php';
   include 'php/edit_empresa.php';
   include 'del_empresa.php';
 
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
                        <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-primary" 
                          data-whatever="<?php echo $emp2['IdEmpresa'] ?>" data-whatevercnpj="<?php echo $emp2['cnpj'] ?>" data-whatevernome="<?php echo $emp2['nomeEmpresa'] ?>"
                          data-whateverservico="<?php echo $emp2['tservico'] ?>" data-whateverend="<?php echo $emp2['endereco'] ?>"
                          data-whateverbairro="<?php echo $emp2['bairro'] ?>" data-whatevercity="<?php echo $emp2['cidade_empresa'] ?>"
                          data-whateverest="<?php echo $emp2['estado_empresa'] ?>" data-whateverparc="<?php echo $emp2['parceria'] ?>"
                          data-whateveruser="<?php echo $emp2['fk_IdCadastro'] ?>">                       
                          <i class="fas fa-pencil-alt"></i>
                        </button>

                        <button class="btn btn-danger mb-2" data-toggle="modal" data-target="#modal-danger" 
                          data-whatever="<?php echo $emp2['IdEmpresa'] ?>" data-whatevercnpj="<?php echo $emp2['cnpj'] ?>" data-whatevernome="<?php echo $emp2['nomeEmpresa'] ?>"
                          data-whateverservico="<?php echo $emp2['tservico'] ?>" data-whateverend="<?php echo $emp2['endereco'] ?>"
                          data-whateverbairro="<?php echo $emp2['bairro'] ?>" data-whatevercity="<?php echo $emp2['cidade_empresa'] ?>"
                          data-whateverest="<?php echo $emp2['estado_empresa'] ?>" data-whateverparc="<?php echo $emp2['parceria'] ?>"
                          data-whateveruser="<?php echo $emp2['fk_IdCadastro'] ?>">                       
                          <i class="fas fa-trash-alt"></i>
                        </button>
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
          <?php include 'include/modal_empresa_edit.php' ?>
          <?php include 'include/modal_empresa_del.php' ?>
        </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'include/footer.php'; ?><?php include 'include/script.php' ?>

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


  <script type="text/javascript">
    $('#modal-primary').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever')
      var cnpj = button.data('whatevercnpj')
      var nome = button.data('whatevernome')
      var servico = button.data('whateverservico')
      var end = button.data('whateverend')
      var bairro = button.data('whateverbairro')
      var city = button.data('whatevercity')
      var estado = button.data('whateverest')
      var parceria = button.data('whateverparc')
      var usuário = button.data('whateveruser')

      var modal = $(this)
      modal.find('.modal-title').text('Atualizar a empresa: ' + recipient)
      modal.find('#id').val(recipient)
      modal.find('#cnpj').val(cnpj)
      modal.find('#name').val(nome)
      modal.find('#serv').val(servico)
      modal.find('#end').val(end)
      modal.find('#bairro').val(bairro)
      modal.find('#city').val(city)
      modal.find('#est').val(estado)
      modal.find('#parc').val(parceria)
      modal.find('#user').val(usuário)
      
    })

    $('#modal-danger').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever')
      var cnpj = button.data('whatevercnpj')
      var nome = button.data('whatevernome')
      var servico = button.data('whateverservico')
      var end = button.data('whateverend')
      var bairro = button.data('whateverbairro')
      var city = button.data('whatevercity')
      var estado = button.data('whateverest')
      var parceria = button.data('whateverparc')
      var usuário = button.data('whateveruser')

      var modal = $(this)
      modal.find('.modal-title').text('Excluir a empresa: ' + recipient)
      modal.find('#id').val(recipient)
      modal.find('#cnpj').val(cnpj)
      modal.find('#name').val(nome)
      modal.find('#serv').val(servico)
      modal.find('#end').val(end)
      modal.find('#bairro').val(bairro)
      modal.find('#city').val(city)
      modal.find('#est').val(estado)
      modal.find('#parc').val(parceria)
      
    })
  </script>
</body>
</html>
