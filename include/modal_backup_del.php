<form method="post" enctype="multipart/form-data">
  <div class="modal fade" id="modal-danger">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title">Selecione um plano:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Deseja excluir o arquivo?</p>
                  <input class="form-control" type="hidden" name="id" id="id"  required>  
                  <input class="form-control" type="hidden" name="data" id="data" required>     
                  <input class="form-control" type="hidden" name="proj" id="proj" required> 
                  <input class="form-control" type="hidden" name="arq" id="arq" required>                       
              </div>        
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                <button type="submit" name="delBack"  class="btn btn-danger">Excluir</button>
              </div>
          </div>
      </div>
  </div>
</form>