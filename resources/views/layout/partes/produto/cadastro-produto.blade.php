<div class="container-fluid">
    <div class="container p-5 w-50">
        <div class="row mt-5 d-flex justify-content-center align-content-center">
        </div>
        <div class="row mt-5 mb-3">
            <h2 class="col mb-4 text-dark d-flex justify-content-center align-content-center">Cadastro de Produto</h2>
        </div>
        <div class="row d-flex justify-content-center align-content-center">
            <form id="formProduto" autocomplete="off" class="w-50 mb-2 ">
                @csrf
                <div class="col m-2">
                    <input type="text" require Placeholder="Nome do produto" name="nome" class="mb-2 form-control in-modern">
                </div>
                <div class="col m-2">
                    <input type="text" id="valor" name="preco" class="mb-3 form-control in-modern" placeholder="valor do produto">
                </div>
                <div class="col m-2 d-flex justify-content-end align-content-end">
                    <Button class="btn  btn-outline-secondary">Cadastrar</Button>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    urlCadastrarProduto = '{{ route("api.produto.create") }}';
</script>
<script src="{{url('js/formProduto.js')}}"></script>
