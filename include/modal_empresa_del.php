<form method="post" enctype="multipart/form-data">
  <div class="modal fade" id="modal-danger">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body"><p>Deseja excluir a empresa?</p>

                <input type="hidden" value="<?php echo $resultEmp['IdEmpresa'] ?>" name="id" id="id">
                <input type="hidden" value="<?php echo $resultEmp['cnpj'] ?>" name="cnpj" id="cnpj">
                <input type="hidden" value="<?php echo $resultEmp['nomeEmpresa'] ?>" name="nomeEmp" id="name">
                <input type="hidden" value="<?php echo $resultEmp['tservico'] ?>" name="tserv" id="serv">
                <input type="hidden" value="<?php echo $resultEmp['endereco'] ?>" name="end" id="end">
                <input type="hidden" value="<?php echo $resultEmp['bairro'] ?>" name="bairro" id="bairro">
                <input type="hidden" value="<?php echo $resultEmp['cidade_empresa'] ?>" name="city" id="city">
                <input type="hidden" value="<?php echo $resultEmp['estado_empresa'] ?>" name="est" id="est">
                <input type="hidden" value="<?php echo $resultEmp['parceria'] ?>" name="parc" id="parc">

                </div>           
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                <button type="submit" name="del"  class="btn btn-danger">Excluir</button>
              </div>
          </div>
      </div>
  </div>
</form>