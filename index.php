<?php 
include 'php/conexao.php';
include 'php/select.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="login.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <link rel="shortcut icon" href="imagem/NimaxL.png" />
            <title>NIMAX | Login</title>
    </head>

    <style>
    body{
        padding-top:290px;
        padding-left: 550px;
        background-image: url(imagem/fundo.jpg);
        background-attachment: fixed;
        background-size: 100%;
        background-repeat: no-repeat;
        background-color: white;
    }
    #logo{
        position: absolute; 
        left: 600px;
        top: 70px;
    }

    </style>

    <body>
        <form method="post"  enctype="multipart/form-data">
          <img src="imagem/logoN.png" class="rounded-circle" alt="NIMAX" width="245" height="205" id="logo">
            <div class="container">
                <div class="card" style="width: 20rem; height: 17rem">
                    <div class="card-body" id="cbody">
                        <h5 style="text-align: center;">Login<h5>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                </svg>
                            </span>
                            <input class="form-control" type="email" name="email" placeholder="E-mail">
                        </div><br>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                </svg>
                            </span>
                            <input class="form-control" type="password" name="senha" placeholder="Senha">
                        </div>
                        <div class="d-grid gap-1 col-12 mx-auto">
                           <input class="btn btn-danger" type="submit" name="log" value="Entrar">
                        </div>
                        <p>
                            <div class="d-grid gap-1 col-12 mx-auto">
                                <a href="cadastro.php" class="btn btn-success">Cadastrar</a>
                            </div>
                        </p>
                        
                    </div>
                </div>
            </div>
        </form>
        <!-- <script>
            function teste() {
                window.alert("Seja Bem-Vindo");
            }
        </script> -->
    </body>
</html>