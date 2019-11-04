<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sistema de Cadastro</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">
        <!-- escolhe o background -->
        <a href="index.php" class="navbar-brand">TECHLANCHE</a>
        <!-- cria o botão lateral responsivo -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- define oq vai ter no header e como vai ser o botao responsivo -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <!-- cria o botão dropdown toogle para abrir varias opçoes -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../bebidas.php">Bebidas</a>
                        <a class="dropdown-item" href="../salgados.php">Salgados</a>
                        <a class="dropdown-item" href="../doces.php">Doces</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>

                <?php
                if (isset($_SESSION['user_connect'])) {
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Olá, <?php echo $_SESSION['nome']; ?></a>
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
                        <a class="nav-link" href="index.php">Login</a>
                    </li>
                <?php
                }
                ?>

                <li class="nav-item">
                    <a class=" ml-md-2 btn btn-outline-primary" href="../planos.php">Saiba mais</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <?php
                    if (isset($_SESSION['status_cadastro'])) :
                        ?>
                        <div class="notification is-success">
                            <p>Cadastro efetuado!</p>
                            <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if (isset($_SESSION['usuario_existe'])) :
                        ?>
                        <div class="notification is-info">
                            <p>O Ra escolhido já existe. Informe outro e tente novamente.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>


                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Ra">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>