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

  <title>TECHLANCHE </title>

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
          <a class="ml-md-2 btn btn-outline-primary" href="planos.php">Saiba mais</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
      <h1 class="display-4 text-primary">Fale Conosco</h1>
    </div>

    <div class="row">
      <div class="col-lg mb-5">
        <form class="bg-light rounded p-4 box-shadow" action="">
          <div class="form-group">
            <label for="clienteNome">Nome</label>
            <input type="text" class="form-control" id="clienteNome">
          </div>

          <div class="form-group">
            <label for="clienteEmail">Email</label>
            <input type="email" class="form-control" id="clienteEmail">
          </div>

          <div class="form-group">
            <label for="clienteMensagem">Mensagem</label>
            <textarea id="clienteMensagem" class="form-control" rows="4"
              placeholder="Escreva sua dúvida, sugestão ou feedback :)"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>
      </div>

      <div class="col-lg">
        <h2 class="h6">NOSSA CANTINA</h2>
        <a href="#"><img class="img-fluid box-shadow rounded mb-4" src="img/mapa.png" alt="Endereço da Empresa"></a>
        <h2 class="h6">DADOS DE CONTATO</h2>
        <ul class="list-unstyled text-secondary">
          <li>tech@lanches.com.br</li>
          <li>21 99999-9999</li>
          <li>De Seg. à Sex. das 8h às 18h</li>
        </ul>

        <h2 class="h6">REDES SOCIAIS</h2>
        <ul class="list-unstyled" style="max-width: 260px">
          <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="/">Facebook</a></li>
          <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="/">Twitter</a></li>
          <li><a class="btn btn-outline-secondary btn-sm btn-block mb-2" href="/">Youtube</a></li>
        </ul>
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