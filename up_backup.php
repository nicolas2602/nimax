<?php 
   include 'php/conexao.php'; 
   include 'php/edit_backup.php';  
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="imagem/NimaxL.png" />
    <title>NIMAX | Atualização Backup</title>
</head>

<style>
   body{
    padding-top:190px;
    padding-left: 410px;
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
            <div class="card" style="width: 40rem; height: 22rem">
                <div class="card-body" id="cbody">
                    <h5 style="text-align: center;">Atualização Backup</h5>
                <div class="row">
                    <div class="col">
                    <label><i>Nome do arquivo</i></label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                    <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                </svg>
                            </span>
                            <input class="form-control" type="text" name="proj" id="proj" value="<?php echo $resultBack['nomeBackup'] ?>" placeholder="Nome da empresa" required>
                            <input class="form-control" type="hidden" name="id" id="id" value="<?= $resultBack['IdBackup'] ?>"  placeholder="Nome da empresa" required>
                        </div>
                    </div>

                </div><br>

                <div class="row">
                    <div class="col">
                    <label><i>Tipo Arquivo</i></label>
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                    <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                </svg>
                            </span>
                            <input class="form-control" readonly="readonly" name="arq" id="arq" value="<?php echo $resultBack['arquivoBackup'] ?>" placeholder="Arquivo" required>
                        </div>
                    </div>

                </div><br>

                    <div class="checkbox mb-2">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                                Aceita os <a href="#" style="color: green;"><u>termos de política e privacidade</u></a> da empresa X-MAX?
                            </label>
                    </div><br>

                    <div class="row">
                        <div class="col">
                           <a class="btn btn-secondary mb-2" href="backup.php">Voltar</a>
                             <input class="btn btn-primary mb-2" type="submit" name="upBack" value="Atualizar">  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>

        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    
</body>
</html>