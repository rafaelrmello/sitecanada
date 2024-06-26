<?php
    require_once "classes/Comentario.php";
    $comentario=new Comentario();
    $lista=$comentario->listarAprovados();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comentários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css_index.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Header-->  
    <div class="container-fluid">
          <div class="row">
            <div class="col-sm-3">
              <a href="https://www.canada.ca/en.html" target="_blank"><img src="img/bandeiracanada.png" id="bandeiracanada"></a>
            </div>

            <div class="col-sm-7" id="col-sm-7">
              <h1 id="curiosidadessobreocanada">Canadá</h1>
            </div>

            <div class="col-sm-2">
                <ul class="nav justify-content-end">
                  
                  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Envie um comentário</button>
                  
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasRightLabel">Preencha o seu e-mail e o seu comentário no formulário abaixo.</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <form action="comentario-gravar.php" method="post">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Endereço de e-mail.</label>
                          <input type="email" id="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Comentário.</label>
                          <textarea class="form-control" id="comentario" name="comentario"  id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                          <input type="submit" value="Enviar" id="botaoenviar">
                        </div>
                      </form>
                    </div>
                  </div>
                </ul>
            </div>
          </div>

        <!--NAV BAR-->
          <div class="row">
            <div class="col-sm-12">
              <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Página principal</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="melhoreslugares.html">Lugares</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="sobreocanada.html">Sobre o Canadá</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="comentarios.php">Comentários</a>
                      </li>
                      <li>
                        <a class="nav-link" href="login.html">Login</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>

        <div class="row">
          <div class="col=xs-12">
            <div class="alert alert-success" role="alert" id="alerta">
              Este site foi criado com o objetivo de aprender a utilizar o framework Bootstrap.
            </div>
          </div>
        </div>



      <!--Conteú<do-->
      <div class="container">
        <div class="row">
            <?php $contador = 0; ?>
            <?php foreach ($lista as $linha): ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $linha['email']; ?></h5>
                            <p class="card-text"><?php echo $linha['comentario']; ?></p>
                        </div>
                    </div>
                </div>

                <?php $contador++; ?>
                <?php if ($contador % 3 == 0): ?>
                  </div><br><div class="row">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
      </div>

      <br>

        <!-- Footer -->
        <footer class="bg-body-tertiary text-center">
          <!-- Grid container -->
          <div class="container p-4">
          
            <!-- Section: Text -->
            <section class="mb-4">
              <p>
                Este site foi criado com o objetivo de oferecer informações abrangentes e interessantes sobre o Canadá. Desde suas cidades vibrantes até suas paisagens naturais deslumbrantes, queremos proporcionar aos visitantes uma visão completa e cativante deste país diversificado. Seja você um turista em busca de dicas de viagem, um estudante interessado em aprender mais sobre a cultura canadense ou alguém simplesmente apaixonado por este belo país, esperamos que você encontre aqui tudo o que procura
              </p>
            </section>
            <!-- Section: Text -->            

          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright: Criado por 
            <a class="text-reset fw-bold" href="https://www.linkedin.com/in/rafaelrmello/" id="copyright" target="_blank">Rafael Rocha de Mello</a>.
          </div>
          <!-- Copyright -->
        </footer>
      </div>
    </div>
  </body>
</html>