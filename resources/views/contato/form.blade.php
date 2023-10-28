<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Home decor</title>
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
          <a class="nav-link" href="#comunicacao" style="color: black"> Comunicação </a>
        </li>
        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link" href="#formulario" style="color: black"> Contato</a>
        </li>
        <li class="nav-item" style="margin-left: 100px">
          <a class="nav-link" href="#mapa" style="color: black"> Mapa</a>
        </li>

      </ul>
    </div>
  </div>

  <main class="container"> <br>

  <div class="p-4 p-md-5 mb-4 carousel slide" style="background-color: rgb(240, 240, 240);">
      <!-- Slide ou carrosel-->
      <div class="col-md-12 px-0">
        <h1 class="display-7"> Quer falar com a gente? </h1>
        <p class="lead"> Envie sua mensagem para podermos conversar! </p>
        <p class="lead" style="font-size: 17px;"><a href="#formulario" class="text-black"> Contatar </a></p>
        <button type="button" class="btn btn-secondary"> 
            <a href="{{ route('contato.index') }}" style="color: white; text-decoration: none">Ver contatos</a>
        </button>
      </div>
  </div>

     <!--Cards-->

     <div class="row" id="comunicacao">
      <div class="col-sm-4 mb-3 mb-sm-0">
        <div class="card text-center">
          <div class="card-body">
            <img src="https://cdn-icons-png.flaticon.com/512/3178/3178158.png" width="50px" style="margin-bottom: 10px">
            <h5 class="card-title">E-mail</h5>
            <p class="card-text">Tem alguma dúvida? <br> Nos contate através do e-mail: </p>
            <h6 class="card-subtitle mb-2 text-body-secondary"> home_decor@gmail.com</h6>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-body">
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384015.png" width="50px" style="margin-bottom: 10px">
            <h5 class="card-title">Instagram</h5>
            <p class="card-text">Confira nossos posts e novidades no momento do lançamento! </p>
            <h6 class="card-subtitle mb-2 text-body-secondary"> @home_decor</h6>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card text-center">
          <div class="card-body">
            <img src=" https://cdn-icons-png.flaticon.com/512/1384/1384007.png" width="50px"
              style="margin-bottom: 10px">
            <h5 class="card-title">Whatsapp</h5>
            <p class="card-text"> Mande uma mensagem e converse diretamente com um de nossos atendentes! </p>
            <h6 class="card-subtitle mb-2 text-body-secondary"> (49) 98899-9988</h6>
          </div>
        </div>
      </div>
    </div>

    <br><br>
    <hr> <br>
    <div id="formulario">
      <h3 class="h3" style="text-align: center"> Contato</h3>
    </div>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @php
       // dd($contato); // é igual ao var_dump()
        if(!empty($contato->id)){
          $route = route('contato.update', $contato->id);
        } else {
          $route = route('contato.store');
        }
    @endphp

    <div class="card" style="padding:20px; margin-top: 20px">
    <form action="{{ $route }}" method="post" class="row g-3">
        @csrf <!-- cria um hash de segurança -->

        @if (!empty($contato->id))
            @method('PUT')
        @endif
        <input type="hidden" name="id" value="@if(!empty($contato->id)){{$contato->id}}@elseif (!empty(old('id'))){{old('id')}}@else{{''}}@endif">
        <div class="col-md-6">
            <label for="">Nome</label><br>
            <input type="text" name="nome" class="form-control"
                value="@if (!empty($contato->nome)) {{$contato->nome}} @elseif(!empty(old('nome'))) {{old('nome')}} @else {{''}} @endif">
        </div>
        
        <div class="col-md-6">
            <label for="">Sobrenome</label><br>
            <input type="text" name="sobrenome" class="form-control"
                value="@if(!empty($contato->sobrenome)) {{$contato->sobrenome}} @elseif (!empty(old('sobrenome'))){{old('sobrenome')}}@else{{''}}@endif">
        </div>

        <div class="col-md-12">
            <label for="">Email</label><br>
            <input type="email" name="email" class="form-control"
                value="@if (!empty($contato->email)){{$contato->email}}@elseif(!empty(old('email'))) {{old('email')}} @else{{''}}@endif">
        </div>

        <div class="col-md-12">
          <label for="">Endereço</label><br>
          <input type="endereco" name="endereco" class="form-control"
              value="@if (!empty($contato->endereco)){{$contato->endereco}}@elseif(!empty(old('endereco'))) {{old('endereco')}} @else{{''}}@endif">
      </div>

        <div class="col-md-12">
            <label class="form-label">Como podemos ajudar?</label><br>
            <input type="text" name="des"  class="form-control" name="ajuda" aria-label="With textarea"
                value="@if (!empty(old('des'))){{old('des')}}@elseif(!empty($contato->des)){{$contato->des}}@else{{''}}@endif">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary">Salvar</button>
            <button type="button" class="btn btn-secondary"> 
                <a href="{{ route('index') }}" style="color: white; text-decoration: none">Voltar</a>
            </button>
        </div>
    </form>
    </div>

    <!--Mapa-->

    <br><br><hr><br>
    <div id="mapa">
      <h3 class="h3"> Localização</h3>
    </div> <br>

    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
      src="https://www.openstreetmap.org/export/embed.html?bbox=-52.628835439682014%2C-27.071646167867605%2C-52.6247262954712%2C-27.06877056820736&amp;layer=mapnik&amp;marker=-27.070208377257348%2C-52.6267808675766"
      style="border: 1px solid rgb(136, 136, 136); border-radius: 5px;"></iframe><br />
    <small>
      <a href="https://www.openstreetmap.org/?mlat=-27.07021&amp;mlon=-52.62678#map=18/-27.07021/-52.62678"
        style="color: black">
        Ver mapa ampliado</a>
    </small>

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
                  <button type="button" class="btn btn-secondary" href="{{ route('ouvidoria.create') }}">
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

