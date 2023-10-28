<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home decor - Cadastro de categoria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <!--Cabeçalho da página: navbar -->
  <div class="container-justify-content-center">
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a href="../../Index.php"><img src="../../imagens/DECOR.png" width="140px"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('desejo.create') }}"> <img
                  src="https://w7.pngwing.com/pngs/500/629/png-transparent-computer-icons-bookmark-wish-list-trade-others-love-miscellaneous-angle.png" width="30px"> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contato.create') }}"> <img
                    src="https://cdn-icons-png.flaticon.com/512/3095/3095583.png" width="30px"> </a>
                    
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('produto.create') }}"> <img
                  src="https://png.pngtree.com/png-vector/20190927/ourlarge/pngtree-cancel-cart-product-icon-png-image_1736147.jpg" width="30px"> </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('categoria.create') }}"> <img
                  src="../../imagens/categoria.png" width="30px"> </a>
              </li>
              <!--Aba de pesquisa -->
            </ul>
            <form class="d-flex" role="search" style="margin-right: 30px">
              <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit"> <img
                  src="https://cdn-icons-png.flaticon.com/512/54/54481.png" width="15px"></button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <!--nav com links para sessões da própria página -->
    <div class="nav-scroller py-3 mb-2">
      <ul class="nav nav-underline flex nav-fill">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link" href="#form" style="color: black"> Cadastro de categoria
       </a>
        </li>
      </ul>
    </div>
  </div>

  <main class="container"> <br>

    <div id="form">
      <h3 class="h3" style="text-align: center"> Categoria </h3>
    </div>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @php
        
        if (!empty($categoria->id)) {
            $route = route('categoria.update', $categoria->id);
        } else {
            $route = route('categoria.store');
        }
    @endphp

    <div class="card" style="padding:20px; margin-top: 20px">
    <form action="{{ $route }}" method="post" class="row g-3">
        @csrf <!-- cria um hash de segurança -->

        @if (!empty($categoria->id))
            @method('PUT')
        @endif

        <input type="hidden" name="id" value="@if(!empty($categoria->id)){{$categoria->id}}@elseif (!empty(old('id'))){{old('id')}}@else{{''}}@endif">
        <div class="col-md-12">
            <label for="">Nome:</label><br>
            <input type="text" name="nome" class="form-control"
                value="@if (!empty($categoria->nome)) {{$categoria->nome}} @elseif(!empty(old('nome'))) {{old('nome')}} @else {{''}} @endif">
        </div>
        

        <div class="col-md-12">
            <label class="form-label">Tipo:</label><br>
            <input type="textarea" name="tipo"  class="form-control" aria-label="With textarea"
                value="@if (!empty(old('tipo'))){{old('tipo')}}@elseif(!empty($categoria->tipo)){{$categoria->tipo}}@else{{''}}@endif">
        </div>

        <div class="col-md-12">
        <label for="">Nome do produto:</label><br>
              <select name="produto_id" class="form-select">
                  @foreach ($produtos as $item)
                      <option value="{{ $item->id }}">{{ $item->nome }}</option>
                  @endforeach
              </select>
          </label>
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-secondary">Salvar</button>
            <button type="button" class="btn btn-secondary"> 
                <a href="{{ route('index') }}" style="color: white; text-decoration: none">Voltar</a>
            </button>
            <button type="button" class="btn btn-secondary"> 
                <a href="{{ route('categoria.index') }}" style="color: white; text-decoration: none">Ver registros</a>
            </button>
        </div>
    </form>
    </div>

    </main>

    <br><br><br>
    <!--Footer da página-->

    <footer class="bg-light text-center">
      <div class="container p-4 pb-0"> <br>
        <section class="">
          <nav>
            <form action="">
              <div class="row d-flex justify-content-center">
              <div class="col-auto">
              <a class="nav-link" href="{{ route('ouvidoria.create') }}"> 
                  <button type="button" class="btn btn-secondary" href="ouvidoria.php">
                    Ouvidoria
                  </button>
                </a>
                </div>
                <div class="col-auto">
                  <p class="pt-2">
                    <strong>TRABALHE CONOSCO</strong>
                  </p>
                </div>

                <div class="col-md-5 col-10">
                  <div class="form-outline mb-4">
                    <input type="email" id="form5Example27" class="form-control"
                      placeholder="Informe seu endereço de e-mail" />
                  </div>
                </div>

                <div class="col-auto">
                  <button type="submit" class="btn btn-secondary">
                    Enviar
                  </button>
                </div>
                <div class="col-auto">
                  <a class="nav-link" href="#"> <img src="https://cdn-icons-png.flaticon.com/512/1384/1384031.png"
                      width="40px"> </a>
                </div>
                <div class="col-auto">
                  <a class="nav-link" href="#" target="_self"> <img
                      src="https://cdn-icons-png.flaticon.com/512/747/747374.png" width="40px"> </a>
                </div>
              </div>
            </form>
          </nav>
        </section> <br>
      </div>

      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);"> <br>
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a> <br> <br>
      </div>

    </footer>
</body>
</html>

