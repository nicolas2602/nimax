<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Nimax</title>
</head>

<style>
   body{
    padding-top:240px;
    padding-left: 550px;
    background-image: url(imagem/fundo.jpg);
    background-attachment: fixed;
    background-size: 100%;
    background-repeat: no-repeat;
    background-color: white;
}

</style>

<body>
    <form method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="card" style="width: 20rem; height: 17rem">
                <div class="card-body" id="cbody">
                    <h5 style="text-align: center;">Login<h5>
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </span>
                        <input class="form-control" type="text" name="user" placeholder="Usuário">
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
                      <input class="btn btn-danger" type="submit" value="Entrar">
                    </div>
                    <p>
                        <div class="d-grid gap-2 col-12 mx-auto">
                            <a href="cadastro.php" class="btn btn-success">Cadastrar</a>
                        </div>
                    </p>
                    
                </div>
            </div>
        </div>
    </form>
</body>
</html>