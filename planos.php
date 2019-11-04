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

    <style>
      
.js [data-slide] { /* seleciona o atributo */
	position: relative;
  }
.js [data-slide] > * { /*    * significa geral   */
	position: absolute;
	top: 0px;
	opacity: 0;
  }
 .js [data-slide] > .active {
	position: relative;
	opacity: 1;
	transition: opacity 500ms;
  }
      </style>

    <script>document.documentElement.classList.add("js");</script>

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

      <section class="container text-center" style="padding: 150px 0 50px 0" data-slide="quote">
          <blockquote class="clientes">
              <p>“Impressionante como isso salvou meu intervalo, não preciso mais pegar filas absurdas e ainda sobra tempo para o truco.”</p>
              <cite>João Pizza</cite>
          </blockquote>

          <blockquote class="clientes">
              <p>“Como ninguem nunca pensou em algo dessa maneira?? você esta na sala e já consegue pedir um salgado que sai quentinho.”</p>
              <cite>Marta Torta</cite>
          </blockquote>

          <blockquote class="clientes">
              <p>“Nada melhor do que a simplesidade e a tecnologia andar juntas, isso me lembrou ate de um ifood so que para versão faculdade.”</p>
              <cite>Leandro Pão</cite>
          </blockquote>
      </section>


          <section class="container">

            <div class="text-center my-2">
      
              <span class="h6 d-block">SEU PLANO, SEU ALIMENTO</span>
      
              <h1 class="display-4 text-primary">Escolha o Plano</h1>
      
            </div>
      
            <div class="row">
      
              <div class="col-md mb-5">
      
                <div class="bg-light rounded p-4 box-shadow">
      
                  <h2>Normal</h2>
      
                  <ul class="lista-plano list-unstyled">
      
                    <li>→ 3 dias para pagar</li>
  
                    <li><span data-toggle="tooltip" data-placement="right" title="2 vezes??? que tal fazer um upgrade">
                      → no máximo 2 vezes com juros
                    </span></li>
      
                  </ul>
      
                  <form>
      
                    <div class="form-group">
      
                      <select class="form-control bg-light" id="inputCidades">
      
                        <option>Selecione a cantina</option>
      
                        <option>TECHLANCHES pouso-alegre 1</option>
      
                        <option>TECHLANCHES pouso-alegre 2</option>
      
                        <option>TECHLANCHES pouso-alegre 3</option>
      
                      </select>
      
                    </div>
      
                  </form>
      
                  <div class="row align-items-center mt-4">
      
                    <div class="col">
      
                      <a href="inscricao.html" class="btn btn-primary btn-lg btn-block">Comprar Plano</a>
      
                    </div>
      
                    <div class="col">
      
                      <span class="h4">R$0</span>
      
                    </div>
      
                  </div>
      
                </div>
      
              </div>
      
              <div class="col-md mb-5">
      
                <div class="bg-light rounded p-4 box-shadow">
      
                  <h2>Platinum <span class="badge badge-success">Recomendado</span></h2>
      
                  <ul class="lista-plano list-unstyled">
      
                    <li>→ 30 dias para pagar</li>

                    <li><span data-toggle="tooltip" data-placement="right" title="isso mesmo, 6 vezes para pagar uma otima oferta">→ no máximo 6 vezes sem juros</span></li>
            
                  </ul>
      
                  <form>
      
                    <div class="form-group">
      
                      <select class="form-control bg-light" id="inputCidades">
      
                        <option>Selecione a cantina</option>
      
                        <option>TECHLANCHES pouso-alegre 1</option>
      
                        <option>TECHLANCHES pouso-alegre 2</option>
      
                        <option>TECHLANCHES pouso-alegre 3</option>
      
                      </select>
      
                    </div>
      
                  </form>
      
                  <div class="row align-items-center mt-4">
      
                    <div class="col">
      
                      <a href="inscricao.html" class="btn btn-primary btn-lg btn-block">Comprar Plano</a>
      
                    </div>
      
                    <div class="col">
      
                      <span class="h4">R$20</span>
      
                    </div>
      
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
                                              <li><a href="" class="btn btn-sm btn-outline-secondary btn-block mb-2" style="max-width: 140px">Facebook</a></li>
                                              <li><a href="" class="btn btn-sm btn-outline-secondary btn-block mb-2" style="max-width: 140px">Twiiter</a></li>
                                              <li><a href="" class="btn btn-sm btn-outline-secondary btn-block " style="max-width: 140px">Youtube</a></li>
                    
                                            </ul>
                                        </div>
                                  </div>
                                </div> 

                        </footer>
                 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/simple-slide.js"></script>
    <script src="./js/app.js"></script>

  </body>
</html>