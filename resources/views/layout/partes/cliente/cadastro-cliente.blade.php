<div class="container-fluid">
    <div class="container p-5 w-50">
        <div class="row mt-5 d-flex justify-content-center align-content-center">
        </div>
        <div class="row mt-5 mb-3">
            <h2 class="col mb-4 text-dark d-flex justify-content-center align-content-center">Cadastro de Cliente</h2>
        </div>
        <div class="row d-flex justify-content-center align-content-center">
            <form id="formCliente" autocomplete="off" class="w-50 mb-2 ">
                @csrf
                <div class="col m-2">
                    <input type="text" require  name="nome" class="mb-2 form-control in-modern" Placeholder="Digite o nome do cliente ...">
                    <div class="error-message" id="error-nome"></div>
                </div>
                <div class="col m-2">
                    <input type="text" id="cpf" name="cpf" class="cpf mb-2 form-control in-modern" placeholder="Digite o cpf do cliente... ">
                    <div class="error-message" id="error-cpf"></div>
                </div>
                 <div class="col m-2">
                    <input type="text" id="" name="email" class="mb-3 form-control in-modern" placeholder="Digite o e-mail do cliente... ">
                    <div class="error-message" id="error-email"></div>
                </div>
                <div class="col m-2 d-flex justify-content-end align-content-end">
                    <Button class="btn  btn-outline-secondary">Cadastrar</Button>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    urlCadastrarCliente = '{{ route("api.cliente.create") }}';
</script>
<script src="{{url('js/formCliente.js')}}"></script>
