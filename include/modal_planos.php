<form method="post" enctype="multipart/form-data">
<div class="modal fade" id="modal-success">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
              <h4 class="modal-title">Selecione um plano:</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                    <div class="row">
                      <div class="col-sm-6">
                      <select class="custom-select" name="pac" required>
                      <option value="">Tipo de plano</option>
                            <?php
                                $sql= mysqli_query($con, "select * from pacote");
                                while($item = mysqli_fetch_assoc($sql))
                                {
                                    $IdPacote = $item['IdPacote'];
                                    $pacote = $item['nomePacote'];
                                    echo "<option value=$IdPacote>$pacote</option>";
                                }
                            ?>
                        </select>
                        </div>
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <select class="custom-select" name="pag" required>
                          <option value="">Forma de pagamento</option>
                          <option value="Boleto">Boleto</option>
                          <option value="Cartão de Crédito">Cartão de crédito</option>
                          <option value="Pix">Pix</option>
                        </select>
                      </div>
                    </div>
                  </div>           
        <br>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
               <button type="submit" name="conc" class="btn btn-outline-success" onclick="return confirm('Deseja concluir o pagamento?')">Comprar</button>
            </div>
        </div>
    </div>
</div>
</form>