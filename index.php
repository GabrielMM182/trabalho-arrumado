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


  <title> TECHLANCHE </title>
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
            <li data-target="#carouselCidades" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/coca.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h3 class="display-4">Que tal uma coca?</h3>
              </div>

            </div>
            <div class="carousel-item">
              <img src="img/comida.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h3 class="display-4">Deu até fome né ( ͡° ͜ʖ ͡°)</h3>
              </div>

            </div>
            <div class="carousel-item">
              <img src="img/doces-com-cafe-sobremesa.png" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                <h3 class="display-4">Que tal um para adoçar sua vida? </h3>
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
        <h1 class="display-4">Uma cantina com pagamento rápido e fácil?</h1>
        <p class="lead">Agora isso é possivel, chega de filas e coisas complicadas. Use já nosso site.</p>
        <p class="lead">Tanto a cantina como o aluno sai no beneficil com essa modernidade da TECHLANCHE.</p>
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

  <section class="py-5 bg-light text-center">
    <div class="container">
      <h6>TUDO DE MELHOR PARA VOCÊ</h6>
      <h2 class="display-4 text-primary pb-5">Como funciona ?</h2>
      <div class="row">

        <div class=" col-12 col-md-6 col-lg-4">
          <img src="img/icones/pas.png" alt="icone">
          <h3>IDENTIFICAÇÃO</h3>
          <p> Para iniciar você vai precisar apenas de seu RA</p>
        </div>

        <div class=" col-12 col-md-6 col-lg-4">
          <img src="img/icones/pass.jpg" alt="icone">
          <h3>POR ONDE COMEÇO</h3>
          <p> Entre no site TECHLANCHE para poder realizar seu login, tanto por celular como computador </p>
        </div>

        <div class=" col-12 col-md-6 col-lg-4">
          <img src="img/icones/passss.png" alt="icone">
          <h3>MAS E DEPOIS?</h3>
          <p> Basta selecionar o que vai querer comprar e simples assim 😅 </p>
        </div>
      </div>
  </section>

  <section id="home-quote" class="p-md-5">
    <blockquote class="blockquote text-center text-white p-md-5 p-3">
      <p class="display-4 preto" style="color: #007bff">
        <em> "Você gasta 15 minutos na fila para comer um salgado em 3 minutos? isso não faz sentido" </em>
      </p>
      <footer class="blockquote-footer preto">Usuários do TECHLANCHE</footer>
    </blockquote>
  </section>

  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
      <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-6" id="perguntasFrequentes" data-children=".pergunta">
        <div class="pergunta py-2">
          <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta1"
            aria-expanded="true" aria-controls="pergunta1">→ Como faço meu pagamento?</a>
          <div id="pergunta1" class="collapse show" role="tabpanel">
            <p>Todo pagamento é realizado pelo proprio site
              então pode comer seu lanche tranquilo que
              você resolve isso com alguns cliques
            </p>
          </div>
        </div>

        <div class="dropdown-divider"></div>
        <div class="pergunta py-2">
          <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta2"
            aria-expanded="true" aria-controls="pergunta2">-> é seguro isso?</a>
          <div id="pergunta2" class="collapse" role="tabpanel">
            <p><b>SIM!</b> O site é totalmente seguro
              ainda mais por estar vinculado com a cantina
              você tem total seguro caso o seu pagamento der errado
              entrando em contato com nosso suporte
            </p>
          </div>
        </div>

        <div class="dropdown-divider"></div>
        <div class="pergunta py-2 pb-5">
          <a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta3"
            aria-expanded="true" aria-controls="pergunta3">→ Como funciona o pagamento?</a>
          <div id="pergunta3" class="collapse" role="tabpanel">
            <p>O pagamento vai ser debitado
              no final do mês com o boleto
              da sua universidade, assim você
              aproveita o seu tempo e paga os dois
              de uma vez
            </p>
          </div>
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
    </nav>
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