<div class="container-fluid">
    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="box col-12 mt-5">

            </div>
        </div>
        <div class="row">
            <h2 class=" d-flex justify-content-center align-content-center mb-4">Consulta de clientes cadastrados</h2>
        </div>
        <form id="formPesquisaCliente">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="input-group">
                        <input type="text" id="nome" autocomplete="off" class="form-control" name="buscar"
                            placeholder="Escreva o nome do Cliente...">
                        <div class="input-group-append">
                            <button id="btnPesquisarCliente" class="btn btn-outline-secondary ml-2"
                                type="button">Pesquisar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="resultadoCliente" class="mt-3" >
            <table id="tabelaClientes" class="table text-light" style="background-color: #83574ade  !important;padding:10px 100px; border-radius:15px; max-height: 30px;">
                <thead>
                    <tr>
                        <th  scope="col">Nome do Cliente</th>
                        <th  scope="col">Cpf</th>
                        <th  scope="col">E-mail</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    urlPesquisarCliente = '{{ route("api.cliente.index") }}';
</script>
<script src="{{url('js/formCliente.js')}}"></script>
