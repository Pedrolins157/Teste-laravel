<div class="container" style="max-width: 90%;">
    <div class="row " style="margin-top:50px;">
        <div class="row mb-5">
            <a class="navbar-brand text-dark fs-2" href="#">Vendedor(a) Nome do vendedor</a>
        </div>
        <div class="col " style="border-right:1px solid gray;margin-right: 20px;">
            <div class="row">
                <h3 class=" text-gray-800 ml-3">Nome do produto </h3>
            </div>
            <div class="row col-12 ">
                <select name="produto" id="SelectProduto" class="btn form-control btn-lg fs-3 text-start text-dark"
                    style="border:2px solid black;" type="button" placeholder="selecione um produto">
                    <option value="Selecione um produto"></option>
                </select>
            </div>
            <div class="row">
                <div class="col-4 mt-3">
                    <h3 class="text-gray-800 ">Quantidade </h3>
                    <input type="number" class="form-control " style="height:60px;font-size: 24px;" id="valorQuant">
                </div>
                <div class="col-6 mt-3">
                    <h3 class="text-gray-800 ">Preço Unitário </h3>
                    <input type="text" class="form-control " style="height:60px;font-size:24px;width:110%;"
                        id="precoUnid" placeholder="$00,00">
                </div>
            </div>
            <div class="row">
                <div class="col-5 mr-3">

                </div>
                <div class="col-5 ml-5">

                </div>
            </div>
            <div class="row mt-3">
                <h3 class="text-gray-800 ml-3">Total </h3>
            </div>
            <div class="row">
                <div class="row col-10">
                    <label class="form-control"
                        style="height: 60px; font-size: 24px; background: #000044c9; color: #ffff;padding-top: 10px; border: 2px solid black;">
                        <span id="valorTotal" class="text-light "></span>
                    </label>
                </div>
                <div class="col-2">
                    <button id="adicionarProduto" class=" btn  btn-success"
                        style="border-radius:9px;border: 1px solid black;"><b>Adicionar
                            produto</b></button>
                </div>
            </div>
        </div>
        <div class="col mr-5">
            <h3 class="text-gray-800">Resumo da venda</h3>
            <div class="container" style="max-height: 206px; overflow-y: auto;height:206px;">
                <table class="table table-bordered text-gray-900 tabelaResumoVenda" id="">
                    <thead style="border: 1px solid black;">
                        <tr>
                            <th scope="col" style="background: #7052ff;color: #f3f0ff;"> Qtd</th>
                            <th scope="col" style="background: #7052ff;color: #f3f0ff;">Produto</th>
                            <th scope="col" style="background: #7052ff;color: #f3f0ff;">Valor Und.</th>
                            <th scope="col" style="background: #7052ff;color: #f3f0ff;">Total</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

            <div class="container">
                <div class="row  justify-content-between d-flex" style="margin-top:26px;px;margin-right:-1px;">
                    <div class="col-1 p-0">
                        <h4 class="text-gray-900 mt-3 d-flex ml-3" style="margin-left: 39px;">Total</h4>
                    </div>
                    <div class="row col-4 mr-5">
                        <label class="form-control"
                            style="height: 60px; font-size: 24px; background: #00044491;; color: #ffff;padding-top: 10px;border: 1px solid black;">
                            <span id="valorTotalVenda" class="text-light "></span>
                        </label>
                    </div>
                    <div class="row col-3 ">
                        <button class="btn btn-control btn-danger efeito" style="border:1px solid black;">
                            Cancelar</button>
                    </div>
                    <div class="row col-3 ml-1">
                        <button class="btn btn-control btn-success efeito" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"
                            style="background:#1d8a36ad;margin-right:50px;border: 1px solid black;">
                            Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>urlCadastrarVenda = '{{ route("api.produto.index") }}';</script>
<script src="{{url('js/formVendas.js')}}"></script>