<?php 
    include 'php/conexao.php';
    include 'php/select2.php';
    include 'php/insert_backup.php';
    include 'php/up_backup.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagem/NimaxL.png" />
  <title>NIMAX | Backup</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
   <?php include 'include/navbar.php'; ?>

  <?php include 'include/menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Backup de Arquivos</h1>
          </div>
          <div class="col-sm-6">
            <?php include 'include/tempo.php'; ?>
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
                    <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Armazenar</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Projeto:</label>
                            <input type="text" name="proj" class="form-control" id="exampleInputEmail1" placeholder="Digite o problema" required>
                        </div>
                
                        <div class="form-group">
                            <label for="exampleInputEmail1">Selecione um arquivo:</label><br>
                            <div class="custom-file">                                
                                <input type="file" name="f1" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Selecionar um arquivo</label>
                            </div>
                        </div>
                        

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="reset" class="btn btn-danger" value="Cancelar">
                            <input type="submit" name="save" class="btn btn-success" value="Salvar">
                        </div>
                    </form>
                    </div>

                </div>
            
                <div class="col-md-6">

                </div>
            
                </div>

            </div>
           </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Meus Documentos</h3>

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
                      <th>Nome do Arquivo</th>
                      <th>Data do Backup</th>
                      <th>Caminho do Arquivo</th>
                    </tr>
                  </thead>

                  <?php
                      $sq=
                      "
                      select * from backup as ru
                      inner join cadastro as u on u.IdCadastro = ru.fk_IdCadastro
                      where fk_IdCadastro='$_SESSION[IdCadastro]' order by IdBackup DESC
                      ";

                      $qu=mysqli_query($con,$sq);
                      while($arq=  mysqli_fetch_assoc($qu)){
                    ?>
                  <tbody>
                    <tr>
                      <td>
                        <div class="col-8">
                            <input type="text" name="proj" class="form-control" value="<?= $arq['nomeBackup'] ?>">
                            <input type="hidden" name="data" value="<?= $arq['dataBackup'] ?>">
                            <input type="hidden" name="id" value="<?= $arq['IdBackup'] ?>">
                        </div>
                      </td>
                      <td><?php $dataArq = $arq['dataBackup']; echo date('d/m/Y H:i:s', strtotime($dataArq)); ?></td>
                      <td><?php echo $arq['arquivoBackup'] ?></td>
                      <td>
                         <a href="<?php echo $arq['arquivoBackup'] ?>" alt="Baixar o arquivo" class="btn btn-success" download><i class="fas fa-download"></i></a>
                         <button type="submit" name="upBack" alt="Atualizar o nome"class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                         
                         <a href="del_backup.php?del=<?php echo $arq=['IdBackup'] ?>&<?php echo $arq=['dataBackup'] ?>
                         &<?php echo $arq=['nomeBackup'] ?>&<?php echo $arq=['arquivoBackup'] ?>&<?php echo $arq=['fk_IdCadastro'] ?>
                         " alt="Excluir o arquivo" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

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
     </section>


            
        </form>

  </div>

  <?php include 'include/footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <?php include 'include/script.php' ?>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- Page specific script -->
    <script>

        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Mensagem enviada com sucesso!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Por favor, digite o nome",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Por favor, digite o email",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
