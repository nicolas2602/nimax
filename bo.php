<?php 
    include 'php/conexao.php';
    include 'php/select2.php';
    include 'php/bo_insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagem/NimaxL.png" />
  <title>NIMAX | Fale Conosco</title>

  <!-- Google Font: Source Sans Pro -->
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
            <h1>Fale Conosco</h1>
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
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Relatar o problema</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Problema</label>
                    <input type="text" name="bo" class="form-control" id="exampleInputEmail1" placeholder="Digite o problema" required>
                  </div>
          
                  <div class="form-group">
                    <label>Mensagem</label>
                    <textarea name="msg" class="form-control" id="exampleInputPassword1" rows="3" placeholder="Mensagem..." required></textarea>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1" required>
                      <label class="custom-control-label" for="exampleCheck1">Aceita os termos <a href="#">da empresa</a>.</label >
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="sub" class="btn btn-primary" placeholder="Enviar">
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
                <div class="card-header bg-info">
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
                        <input type="HIDDEN" name="id" value="<?= $msg['IdProblema'] ?>">
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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- Page specific script -->
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
</body>
</html>
