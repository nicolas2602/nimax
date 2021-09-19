<form method="post" enctype="multipart/form-data">
  <div class="modal fade" id="modal-danger">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title">Apagar Mensagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Deseja apagar a mensagem?</p>                    
              </div>        
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                  <a href="del_msg.php?del=<?php echo $msg['IdProblema'] ?>&<?php echo $msg['dataProblema'] ?>
                    &<?php echo $msg['descProblema'] ?>&<?php echo $msg['msgProblema'] ?>&<?php echo $msg['fk_cadastro'] ?>"
                    class="btn btn-danger">
                    Excluir
                  </a>
              </div>
          </div>
      </div>
  </div>
</form>