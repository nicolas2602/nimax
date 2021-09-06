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
        <form method="post" enctype="multipart/form-data">
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
                                <button id="botao" type="button" class="input-group-text"  onclick="mostrarSenha()" type="button">
                                    <svg id="mostrar" display="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>

                                    <svg id="ocultar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                                    </svg>
                                </button>
                            <input class="form-control" id="senha" type="password" name="senha" placeholder="Senha">
                        </div>

                        <script>
                            function mostrarSenha(){
                                var tipo = document.getElementById("senha"); // <input id="senha">
                                if(tipo.type == "password"){ // conectado a <input type="password">
                                    tipo.type = "text";
                                    document.getElementById('mostrar').style.display = "inline-block";
                                    document.getElementById('ocultar').style.display = "none";
                                }else{
                                    tipo.type = "password"; // conectado a <input type="password"> e <button type="button" onclick="mostrarSenha()"></button>
                                    document.getElementById('mostrar').style.display = "none";
                                    document.getElementById('ocultar').style.display = "inline-block";
                                }
                            }
                       </script>

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