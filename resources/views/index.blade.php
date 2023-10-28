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

    <!--nav com links para sessões da própria página -->
    <div class="nav-scroller py-3 mb-2">
      <ul class="nav nav-underline flex nav-fill">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#casa_e_decoracao" style="color: black"> Casa e decoração </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cama_e_banho" style="color: black"> Cama e banho</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#mesa_posta" style="color: black"> Mesa posta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('promocoes') }}" style="color: black"> Promoções</a>
        </li>
      </ul>
    </div>
  </div>


  <main class="container">
    <!-- Slide ou carrosel-->
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://foyr.com/learn/wp-content/uploads/2021/07/home-decor-trends-2021.jpg" class="d-block w-100"
            alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://img.freepik.com/free-photo/beautiful-interior-design-with-wooden-pieces_23-2149155798.jpg"
            class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://cdn.cdnparenting.com/articles/2019/01/12121945/549055441-H-1024x700.webp"
            class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> <br> <br>

    <!--Casa e decoração-->

    <div id="casa_e_decoracao">
      <h3 class="h3"> Casa e decoração</h3>
    </div> <br>

    <!--Cards -->
    <div class="card-group">
      <div class="card text-center">
        <img src="https://i.pinimg.com/564x/1c/51/f8/1c51f85375c5af6516f5a58d658e3800.jpg" class="card-img-top"
          alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Luminárias</h5>
          <p class="card-text">Oferecemos diversas opções de iluminação para o seu ambiente: spots, luminárias de teto,
            plafons, lâmpadas de LED e muito mais. Confira os melhores preços!</p>
        </div>

      </div>
      <div class="card text-center">
        <img src="https://i.pinimg.com/236x/57/23/0b/57230bb206aebce2975f98fe800acd2f.jpg" class="card-img-top"
          alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Espelhos</h5>
          <p class="card-text">Os melhores espelhos, com poder de ampliar e iluminar os espaços, só aqui na HomeDecor!
            Espelhos para decoração estão disponíveis em vários formatos e modelos. </p>
        </div>
      </div>
      <div class="card text-center">
        <img src="https://i.pinimg.com/236x/09/59/b4/0959b451da3e8e84eb6b0d8cfd89f960.jpg" class="card-img-top"
          alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Quadros</h5>
          <p class="card-text">Decore seu ambiente com os mais lindos quadros da HomeDecor. Com descontos imperdíveis e
            entrega rápida para todo o Brasil.</p>
        </div>
      </div>
      <div class="card text-center">
        <img src="https://i.pinimg.com/236x/03/84/f9/0384f97c245fc487a2b1d712986c097a.jpg" class="card-img-top"
          alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Móveis</h5>
          <p class="card-text">Somos especializados em tornar ambientes agradáveis e sofisticados através de móveis, e
            os melhores você encontra aqui!</p>
        </div>
      </div>
    </div> <br> <br>


    <!--Cama e banho-->

    <div id="cama_e_banho">
      <h3 class="h3"> Cama e banho</h3>
    </div> <br>

    <div class="card-group">
      <div class="card text-center">
        <img src="https://blog.carajasonline.com/wp-content/uploads/2022/08/shutterstock_1881689266.jpg"
          class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Kit de cama</h5>
          <p class="card-text">Deite, role, estique, desenrole e se jogue para aproveitar ao máximo essa experiência! Os
            melhores kits de cama você encontra aqui, com os melhores preços.</p>
        </div>

      </div>
      <div class="card text-center">
        <img src="https://www.bemdormirbemviver.com.br/wp-content/uploads/2022/05/cama-mesa-e-banho.jpg"
          class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Toalhas de rosto</h5>
          <p class="card-text">Toalhas de Rosto para renovar seu lar, tem na HomeDecor! Os menores preços em toalhas e
            com entrega garantida você encontra aqui.</p>
        </div>
      </div>
      <div class="card text-center">
        <img
          src="https://www.casaencanto.com.br/static/60591/sku/cama-jogos-de-cama-casal-jogo-de-cama-casal-karsten-270-fios-100-algodao-allen-1626209819701.jpg"
          class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Colchas</h5>
          <p class="card-text">Um toque a mais de estilo para o seu quarto, tenha todo o diferencial de colchas da
            HomeDecor no seu quarto!</p>
        </div>
      </div>
      <div class="card text-center">
        <img
          src="https://a-static.mlcdn.com.br/1500x1500/kit-jogo-de-toalha-de-banho-5-pecas-completo-macio-obsorcao-bordado-chique-lindo-algodao-pri-enxovais/prienxovais3/15850653561/a89de5955a49b8c2aca3d4ecbc24a8ea.jpeg"
          class="card-img-top" alt="..." height="300px">
        <div class="card-body">
          <h5 class="card-title">Toalhas de banho</h5>
          <p class="card-text">Toalhas de qualidade com os melhores preços e entrega rápida. Aqui na HomeDecor você
            encontra a toalha de banho certa pra você, aproveite! </p>
        </div>
      </div>
    </div> <br> <br>

    <!--Mesa posta-->
    <div id="mesa_posta">
      <h3 class="h3"> Mesa posta</h3>
    </div> <br>

    <div class="card-group">
      <div class="card text-center">
        <img src="https://img.camicado.com.br/banner/01-home/home_oferta_01_230405.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Taças</h5>
          <p class="card-text">Ofertas de taças, você encontra aqui! Confira os melhores preços e variedades de taças de
            vinho, champanhe, taças de cerveja e muito mais na HomeDecor!</p>
        </div>

      </div>
      <div class="card text-center">
        <img src="https://img.camicado.com.br/banner/01-home/home_oferta_02_230405.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Louças</h5>
          <p class="card-text">Tudo o que você precisa em louças com descontos incríveis, qualidade no material, entrega
            rápida e pagamento facilitado. Confira agora!</p>
        </div>
      </div>
      <div class="card text-center">
        <img src="https://img.camicado.com.br/banner/01-home/home_oferta_03_230405.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Eletrodomésticos</h5>
          <p class="card-text">As melhores ofertas de eletrodomésticos que a sua casa precisa! Refrigeradores, freezers,
            fogões, micro-ondas, lavadoras e muito mais!</p>
        </div>
      </div>
      <div class="card text-center">
        <img src="https://img.camicado.com.br/banner/01-home/home_oferta_04_230405.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Talheres</h5>
          <p class="card-text">Procurando por talheres? Confira as ofertas que a HomeDecor separou para você. Com
            facilidade no pagamento e entrega rápida!</p>
        </div>
      </div>
    </div> <br> <br>

    <!--article com informações adicionais sobre a empresa -->

    <br>
    <div class="row g-5">
      <div class="col-md-8">
        <article class="blog-post bg-light text-dark rounded" style="padding: 20px">
          <h2 class="blog-post-title"> Home Decor</h2>
          <p class="blog-post-meta"> Presente em todos os momentos </p>
          <hr>

          <div class="card" style="padding: 10px; margin-bottom: 20px">
            <p class="blog-post-meta"
              style=" width: 165px; background-color: grey; padding: 5px; color: white; border-radius: 5px; text-align: center">
              Tudo em um só lugar </p>
            <img src="https://cdn-icons-png.flaticon.com/512/6919/6919365.png" class="img" width="40px"
              style="margin-bottom: 7px;">

            <p style="text-align: justify">
              Sua lista pode ser criada e acessada através do nosso site ou na loja física de sua preferência
            </p>
          </div>

          <div class="card" style="padding: 10px; margin-bottom: 20px">
            <p class="blog-post-meta"
              style=" width: 165px; background-color: grey; padding: 5px; color: white; border-radius: 5px; text-align: center">
              Vale troca ou produto </p>
            <img src="https://cdn-icons-png.flaticon.com/512/567/567600.png" class="img" width="50px"
              style="margin-bottom: 7px;">

            <p style="text-align: justify">
              Você pode escolher entre receber o produto no conforto de sua casa ou resgatar o valor dele em vale troca.
            </p>
          </div>

          <div class="card" style="padding: 10px; margin-bottom: 20px">
            <p class="blog-post-meta"
              style=" width: 165px; background-color: grey; padding: 5px; color: white; border-radius: 5px; text-align: center">
              Consultoria exclusiva</p>
            <img src="https://cdn-icons-png.flaticon.com/512/3447/3447661.png" class="img" width="40px"
              style="margin-bottom: 7px;">

            <p style="text-align: justify">
              Conte com um atendimento online ou em loja física para você e seus convidados.
            </p>
          </div>

          <div class="card" style="padding: 10px; margin-bottom: 20px">
            <p class="blog-post-meta"
              style=" width: 165px; background-color: grey; padding: 5px; color: white; border-radius: 5px; text-align: center">
              Lista em dinheiro</p>
            <img src="https://cdn-icons-png.flaticon.com/512/2454/2454282.png" class="img" width="50px"
              style="margin-bottom: 7px;">

            <p style="text-align: justify">
              Crie sua lista com experiências e resgate em dinheiro, de forma simples e segura
            </p>
          </div>

        </article>
      </div>

      <!--Aside com os serviçoes exclusivos da loja-->
      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem">
          <div class="p4 mb-3 bg-light rounded" style="padding: 20px">
            <h4 class="h4"> Serviços exclusivos </h4>
            <p> Vendas </p>
            <div class="text-center">
              <img
                src="https://elevesuasvendas.com.br/blog/wp-content/uploads/2022/09/ciclo-de-vendas-curto-e-longo.jpg"
                class="card-img-top">
            </div>
            <hr>

            <p> Cartão da loja</p>
            <div class="text-center">
              <img
                src="https://hotsite-cdn.s3.amazonaws.com/wp-content/uploads/2021/07/06111402/Cart%C3%A3o-fidelidade-para-lojas.png"
                class="card-img-top">
            </div>
            <hr>

            <p> Atendimento personalizado </p>
            <div class="text-center">
              <img
                src="https://blog.softin.com.br/wp-content/uploads/2017/11/Atendimento-personalizado-5-dicas-para-um-bom-exito.jpg"
                class="card-img-top">
            </div>
            <hr>

          </div>
        </div>
      </div>
    </div>
  </main> <br> <br>

  <div class="container-justify-content-center">
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
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>

