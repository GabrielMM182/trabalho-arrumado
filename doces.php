<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">


  <title>TECHLANCHE</title>
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">
    <!-- escolhe o background -->
    <a href="index.php" class="navbar-brand">TECHLANCHE</a>
    <!-- cria o botão lateral responsivo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- define oq vai ter no header e como vai ser o botao responsivo -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <!-- cria o botão dropdown toogle para abrir varias opçoes -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Produtos</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="bebidas.php">Bebidas</a>
            <a class="dropdown-item" href="salgados.php">Salgados</a>
            <a class="dropdown-item" href="doces.php">Doces</a>

          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>

        <?php
        if(isset($_SESSION['user_connect'])){
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Olá, <?php echo $_SESSION['nome'];?></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Perfil</a>
            <a class="dropdown-item" href="#">Meu Carrinho</a>
            <a class="dropdown-item" href="php/logout.php">Sair</a>
          </div>
        </li>
        
        <?php
        } else {
        ?>
          <li class="nav-item">
          <a class="nav-link" href="php/index.php">Login</a>
        </li>
        <?php
        }
        ?>

        <li class="nav-item">
          <a class=" ml-md-2 btn btn-outline-primary" href="planos.php">Saiba mais</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="container-fluid">
    <div class="row bg-dark text-white">

      <div class="col-lg-7 p-0">
        <div id="carouselCidades" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
            <li data-target="#carouselCidades" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/brigadeiro.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h3 class="display-4">O mesmo que você pegava escondido nas festinhas de aniversario do seu primo</h3>
              </div>

            </div>
            <div class="carousel-item">
              <img src="img/açaí.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h3 class="display-4"> Porque açai é perfeito ( ͡° ͜ʖ ͡°)</h3>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="col-lg-5 p-4 align-self-center">
        <h1 class="display-4">quando terminar seu salgado nada melhor do que <b>DOCES</b></h1>
        <p class="lead">uma dose de açucar para te manter feliz</p>
        <p class="lead"></p>Aqui na TECHLANCHE você encontra varios tipos de doces, do açai até o brigadeiro</p>
        <form action="">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="digite seu email para entrarmos em contato"
              aria-label="Email">
            <span class="input-group-btn">
              <button class="loko" type="button">Saiba mais</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </section>

  <div class="my-5 text-center">
    <span class="h6 d-block">CONHEÇA NOSSO CARDÁPIO</span>
    <h2 class="display-4 text-primary">a lista de todas as bebidas</h2>
  </div>

  <section class="container my-5 text-center">
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-salgado1-list" data-toggle="list"
            href="#list-salgado1" role="tab" aria-controls="salgado1">AÇAI</a>
          <a class="list-group-item list-group-item-action " id="list-salgado2-list" data-toggle="list"
            href="#list-salgado2" role="tab" aria-controls="salgado2">BRIGADEIRO</a>
          <a class="list-group-item list-group-item-action " id="list-salgado3-list" data-toggle="list"
            href="#list-salgado3" role="tab" aria-controls="salgado3">BOLO</a>
          <a class="list-group-item list-group-item-action " id="list-salgado4-list" data-toggle="list"
            href="#list-salgado4" role="tab" aria-controls="salgado4">KIT KAT</a>

        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-salgado1" role="tabpanel"
            aria-labelledby="list-salgado1-list">o melhor doce de todos, agora no seu intervalo, já preparado com o
            melhor com 400ml leite condensado e leite em pó <b>VALOR: R$10,00</b> <button type="button"
              class="btn btn-outline-success">Comprar</button> </div>
          <div class="tab-pane fade " id="list-salgado2" role="tabpanel" aria-labelledby="list-salgado2-list">Bom igual
            aqueles do tempo de festa <b>VALOR: R$1,00</b> <button type="button"
              class="btn btn-outline-success">Comprar</button> </div>
          <div class="tab-pane fade " id="list-salgado3" role="tabpanel" aria-labelledby="list-salgado3-list">bom
            simples e gostoso <b>VALOR: R$ 3,50</b> <button type="button"
              class="btn btn-outline-success">Comprar</button> </div>
          <div class="tab-pane fade" id="list-salgado4" role="tabpanel" aria-labelledby="list-salgado4-list">have a
            break have a kit kat <b>VALOR: R$2,00</b> <button type="button"
              class="btn btn-outline-success">Comprar</button> </div>

        </div>
      </div>
    </div>
  </section>

  <footer>
    <nav class="bg-dark text-white p-3">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-6">
            <h6>PÁGINAS</h6>
            <ul class="list-unstyled">
              <li><a href="" class="text-primary">Detalhes da Conta</a></li>
              <li><a href="" class="text-primary">Contato</a></li>
              <li><a href="" class="text-primary">Saiba mais</a></li>

            </ul>
          </div>

          <div class="col-md-3 col-6">
            <h6>CARDAPIO</h6>
            <ul class="list-unstyled">
              <li><a href="" class="text-primary">BEBIDAS</a></li>
              <li><a href="" class="text-primary">SALGADOS</a></li>
              <li><a href="" class="text-primary">DOCES</a></li>

            </ul>
          </div>

          <div class="col-md-4 col-8">
            <h6>DADOS DE CONTATO</h6>
            <ul class="list-unstyled">
              <li class="text-secondary">techlanche@gmail.com.br</li>
              <li class="text-secondary">21 40028922</li>
              <li class="text-secondary">De Seg. à Sex. das 8h às 18h</li>
            </ul>
          </div>

          <div class="col-md-2 col-4">
            <h6>REDES SOCIAIS</h6>
            <ul class="list-unstyled">
              <li><a href="" class="btn btn-sm btn-outline-secondary btn-block mb-2"
                  style="max-width: 140px">Facebook</a></li>
              <li><a href="" class="btn btn-sm btn-outline-secondary btn-block mb-2"
                  style="max-width: 140px">Twiiter</a></li>
              <li><a href="" class="btn btn-sm btn-outline-secondary btn-block " style="max-width: 140px">Youtube</a>
              </li>

            </ul>
          </div>
        </div>
      </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>