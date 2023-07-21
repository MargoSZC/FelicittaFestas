<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}" />
    <title>Formulário de clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top" class="d-inline-block align-text-top">Felicittá Festas
               </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{url('/produto')}}">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/cardapio')}}">Cardápio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/pacote')}}">Pacotes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/cliente')}}">Clientes</a></li>
                </ul>
                @if (Route::has('login'))
                @auth
                    <a href="{{ url('/principal') }}" class="btn btn-dark"></a>
                    <a class="btn btn-dark" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class='fas fa-sign-out-alt'></i> {{ __('Sair') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-dark">Cadastre-se</a>
                    @endif
                @endauth
            </div>
        @endif
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
   @php
        if (!empty($cliente->id)) {
            $route = route('cliente.update', $cliente->id);
        } else {
            $route = route('cliente.store');
        }
    @endphp
        <h1>Formulário de Clientes</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($cliente->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id"
                value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($cliente->id)) {{ $cliente->id }} @else {{ '' }} @endif" /><br>
            <div class="col-3">
                <label class="form-label">Nome</label><br>
                <input type="text" class="form-control" name="nome"
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($cliente->nome)) {{ $cliente->nome }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col-3">
                <label class="form-label">Telefone</label><br>
                <input type="text" class="form-control" name="telefone"
                    value="@if (!empty(old('telefone'))) {{ old('telefone') }} @elseif(!empty($cliente->telefone)) {{ $cliente->telefone }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col-3">
                <label class="form-label">Email</label><br>
                <input type="text" class="form-control" name="email"
                    value="@if (!empty(old('email'))) {{ old('email') }} @elseif(!empty($cliente->email)) {{ $cliente->email }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col-3">
                <label class="form-label">CPF</label><br>
                <input type="text" class="form-control" name="cpf"
                    value="@if (!empty(old('cpf'))) {{ old('cpf') }} @elseif(!empty($cliente->cpf)) {{ $cliente->cpf }} @else {{ '' }} @endif" /><br>
            </div>
            <button class="btn btn-dark" type="submit">
                <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href="{{ route('cliente.index') }}" class="btn btn-dark"><i class="fa-solid fa-arrow-left"></i>
                Voltar</a>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
