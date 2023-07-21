<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Produto List </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.png')}}" />        <!--Icone fonte awsome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
        <h1>Listagem de Produtos</h1>
        <form action="{{ action('App\Http\Controllers\ProdutoController@search') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-2">
                    <select name="campo" class="form-select">
                        <option value="nome">Nome</option>
                        <option value="quantidade">Qtd. Estoque</option>
                        <option value="valor">Valor</option>
                    </select>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
                </div>
                <div class="col-6">
                    <button class="btn btn-dark" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i> Buscar
                    </button>
                    <a class="btn btn-dark" href="{{ action('App\Http\Controllers\ProdutoController@create') }}"><i
                            class="fa-solid fa-plus"></i> Cadastrar</a>
                </div>
            </div>
        </form>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $item)
                    @php
                        $nome_imagem = !empty($item->imagemproduto) ? $item->imagemproduto : 'sem_imagem.jpg';
                    @endphp
                    <tr>
                        <td scope='row'>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->quantidade}}</td>
                        <td>{{ $item->valor }}</td>
                        <td>{{ $item->categoriaproduto->nome }}</td>
                        <td><img src="/storage/{{ $nome_imagem }}" width="100px" class="img-thumbnail" /> </td>
                        <td><a href="{{ action('App\Http\Controllers\ProdutoController@edit', $item->id) }}"><i
                                    class='fa-solid fa-pen-to-square' style='color:orange;'></i></a></td>
                        <td>
                            <form method="POST"
                                action="{{ action('App\Http\Controllers\ProdutoController@destroy', $item->id) }}">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button type="submit" onclick='return confirm("Deseja Excluir?")'
                                    style='all: unset;'><i class='fa-solid fa-trash' style='color:red;'></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>
