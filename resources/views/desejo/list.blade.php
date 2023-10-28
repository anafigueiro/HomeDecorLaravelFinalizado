<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home decor</title>
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
          <a href="../Index.php"><img src="../imagens/DECOR.png" width="140px"></a>
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
                  src="../imagens/categoria.png" width="30px"> </a>
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

    <br><br>
 
    <h3 class="h3" style="text-align: center"> Lista de desejos</h3>
    <div class="card" style="padding:20px; margin-top: 20px">
        <form action="{{ route('desejo.search') }}" method="post" class="row g-3">
            @csrf <!-- cria um hash de segurança -->
            <div class="col-md-6">
                <select class="btn btn btn-secondary btn-sm dropdown-toggle" name="tipo" >
                    <option value="nome">Nome da lista</option>
                    <option value="qtdItens">Quantidade de itens</option>
                    <option value="dataEntrada">Data de entrada</option>
                    <option value="produto_nome">Nome do produto</option>
                    <option value="desc">Descrição da lista</option>
                </select> 
            <input class="input input-sm mb-3" type="text" name="valor" placeholder="Pesquisar">
            <button class="btn btn-secondary btn-sm" type="submit">Buscar</button>
            <button class="btn btn-secondary btn-sm">
                <a href="{{ route('desejo.create') }}" style="color:white; text-decoration:none">Cadastrar</a>
            </button>
            <button class="btn btn-secondary btn-sm">
              <a href="{{ route('desejo.chart') }}" 
                 target="_blank" 
                 style="color:white; text-decoration:none">Gráfico</a>
          </button>
        </form>
    </div>
    <table border="1" class="table table-bordered" style="margin-top: 30px">
        <tr>
            <th>ID</th>
            <th>Nome da lista</th>
            <th>Quantidade de itens</th>
            <th>Data de entrada</th>
            <th>Nome do produto</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        @foreach ($desejos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nome}}</td>
                <td>{{$item->qtdItens}}</td>
                <td>{{$item->dataEntrada}}</td>
                <td>{{ $item->produto->nome ?? '' }}</td>
                <td>{{$item->desc}}</td>
                <td><a href="{{route('desejo.edit', $item->id)}}">Editar</a></td>
                <td><a href="{{route('desejo.destroy', $item->id)}}"
                    onclick="return confirm('Deseja Excluir?')">Excluir</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

    <br><br><br><br>
    <!--Rodapé da página-->

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
