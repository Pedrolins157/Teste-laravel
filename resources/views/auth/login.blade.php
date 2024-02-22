<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Laravel</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            width: 100%;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            border: 2px solid #ccc;
            padding: 100px 100px;
            border-radius: 10px;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container row">
            <div class="col me-3" style="border-right:1px solid black; ">
                <div class="d-flex justify-content-center align-items-center" style="height: 100%;margin-right:55px;">
                    <form action="{{route('api.usuario.create')}}" method="POST" id="user-registration-form">
                        @csrf
                        <h5 class="">Cadastro de usuário</h5>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nome_usuario" name="nome"
                                placeholder="Digite seu nome...">
                        </div>
                        <div class="col mb-3">
                            <input type="text" id="cpf" name="cpf" class="cpf mb-2 form-control "
                                placeholder="Digite o cpf... ">
                            <div class="error-message" id="error-cpf"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="" name="login"
                                placeholder="Digite seu login...">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="" name="password"
                                placeholder="Digite sua senha...">
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center align-center-center">
                                <button type="submit" class="btn btn-secondary">Criar Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col ms-3"> <!-- Adicionado a classe 'col' aqui -->
                <div class="d-flex justify-content-center align-items-center" style="height: 100%;margin-left:55px;">

                    <form action="{{route('login.auth')}}" method="POST">
                        @csrf
                        <h5 class="col-12 d-flex justify-content-center align-center-center">Login</h5>
                        <div class="mb-3">
                            <label for="login" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="login" name="login"
                                placeholder="Digite seu usuário">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="password"
                                placeholder="Digite sua senha">
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center align-center-center">
                                <button type="submit" class="btn btn-primary ml-5">Entrar</button>
                                <script>
                                    urlLogin = '{{ route("login") }}';
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/jquery.easing.min.js')}}"></script>
    <script src="{{url('js/sb-admin-2.min.js')}}"></script>
    <script src="{{url('js/jquery.maskMoney.js')}}"></script>
    <script src="{{url('js/script.js')}}"></script>
</body>

</html>