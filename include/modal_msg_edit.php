<form method="post" enctype="multipart/form-data">
  <div class="modal fade" id="modal-primary">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header bg-primary">
                <h5 class="modal-title">Apagar Mensagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"><input type="HIDDEN" name="id" id="id">
                 <div class="form-group">
                    <label for="exampleInputEmail1">Problema</label>                   
                    <input class="form-control" type="text" name="bo" id="bo" required>
                  </div>
          
                  <div class="form-group">
                    <label>Mensagem</label>
                    <textarea name="msg" class="form-control" id="msg" rows="3" required></textarea>
                  </div>
              </div>        
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                <input type="submit" name="up" class="btn btn-primary" value="Editar">
              </div>
          </div>
      </div>
  </div>
</form>