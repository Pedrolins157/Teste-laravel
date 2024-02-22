<div class="container-fluid">
    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="box col-12 mt-5">

            </div>
        </div>
        <div class="row">
            <h2 class=" d-flex justify-content-center align-content-center mb-4">Consulta de Produtos</h2>
        </div>
        <form id="formPesquisa">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="input-group">
                        <input type="text" id="nome" autocomplete="off" class="form-control" name="buscar"
                            placeholder="Escreva o nome do produto...">
                        <div class="input-group-append">
                            <button id="btnPesquisar" class="btn btn-outline-secondary ml-2"
                                type="button">Pesquisar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="resultado" class="mt-3" >
            <table id="tabelaProdutos" class="table text-light" style="background-color: #83574ade  !important;padding:10px 100px; border-radius:15px; max-height: 30px;">
                <thead>
                    <tr>
                        <th  scope="col">Nome do Produto</th>
                        <th  scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    urlPesquisarProduto = '{{ route("api.produto.index") }}';
</script>
<script src="{{url('js/formProduto.js')}}"></script>
