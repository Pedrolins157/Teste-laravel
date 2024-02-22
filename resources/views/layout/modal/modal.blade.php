<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Detalhes da Compra</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <h4>Itens da Compra:</h4>
                <table class="table table-bordered  tabelaResumoVenda" id="" >
                        <thead >
                            <tr>
                                <th scope="col" > Qtd</th>
                                <th scope="col" >Produto</th>
                                <th scope="col" >Valor Und.</th>
                                <th scope="col" >Total</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                </table>
        </div>
        <div class="form-group">
          <label for="formaPagamento">Forma de Pagamento:</label>
          <select class="form-control" id="formaPagamento">
            <option value="">Selecione...</option>
            @foreach(\App\Models\Venda::FORMAS_PAGAMENTO as $formaPagamento)
              <option value="{{ $formaPagamento }}">{{ ucfirst($formaPagamento) }}</option>
            @endforeach
          </select>
        </div>

        <!-- Campo de seleção para o número de parcelas -->
        <div class="form-group" id="parcelasGroup" style="display: none;">
          <label for="parcelas">Número de Parcelas:</label>
          <select class="form-control" id="parcelas" name="parcelas">
            <option value="">Selecione...</option>
            @for($i = 1; $i <= 12; $i++)
              <option value="{{ $i }}">{{ $i }}x</option>
            @endfor
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-success">Finalizar compra</button>
      </div>
    </div>
  </div>
</div>

<script src="{{url('js/formVendas.js')}}"></script>