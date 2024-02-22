<nav class="navbar navbar-expand-lg bg-body-tertiary"
    style="background-color: #060533db  !important;padding:10px 100px;">
    <div class="container-fluid">
        <a class="navbar-brand text-light mb-1" href="/">DD Tecnologia</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="dropdown">
                    <a class="nav-link  dropdown-toggle text-light  mr-5" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item load-page" href="{{route('cadastra.produto')}}">Cadastrar
                                produto</a></li>
                        <li><a class="dropdown-item load-page" href="{{route('consulta.produto')}}">Consultar
                                produto</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                        Cliente
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item load-page" href="{{route('cadastra.cliente')}}">Cadastrar
                                Cliente</a></li>
                        <li><a class="dropdown-item  load-page" href="{{route('consulta.cliente')}}">Consultar
                                Cliente</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <a class="nav-link dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">
                        Venda
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item load-page" href="{{route('cadastra.venda')}}">Cadastrar
                                Venda</a></li>
                        <li><a class="dropdown-item  load-page" href="{{route('historico.venda')}}">Histórico de vendas
                                Venda</a></li>
                    </ul>
                </div>
            </ul>
            <div class="row">
                <div class="col d-flex ml-5 x-auto">
                @if(isset($user) && $user->nome)
                    <span class="mr-2 d-none d-lg-inline small text-light"><b>Olá, Sr(a)   {{ $user->nome }}</b></span>
                    @endif
                </div>
                <div class="col mr-5" role="search">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-control btn-danger efeito" type="submit" style="border-radius:13px;">Sair</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>