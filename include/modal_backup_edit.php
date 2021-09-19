<form method="post" enctype="multipart/form-data">
  <div class="modal fade" id="modal-primary">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title">Selecione um plano:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label><i>Nome do arquivo</i></label>
                    <div class="input-group mb-2">
                           <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                        <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                    </svg>
                                </span>
                            </div>
                        <input class="form-control" type="text" name="proj" id="proj" placeholder="Nome da empresa" required>                       
                    </div>  
              </div><input class="form-control" type="hidden" name="id" id="id" placeholder="Nome da empresa" required>           
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                <button type="submit" name="upBack"  class="btn btn-primary">Atualizar</button>
              </div>
          </div>
      </div>
  </div>
</form>