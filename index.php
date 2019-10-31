<?php
$email="";
$errores=[
  "email"=>"",
  "password"=>"",
];
if ($_POST) {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)== false) {
    $errores["email"]="El mail no tiene el formato correcto<br>";
  }

  if (strlen($_POST["password"])<8){
    $errores["password"]="Su Contraseña debe tener almenos 8 caracteres<br>";
  }
}
if ($_POST){
  $email = $_POST["email"];
}

if ($_POST) {
  $json = file_get_contents("users.json");
  $usuarios = json_decode($json, true);
  foreach ($usuarios as $usuario) {
    if ($usuario["email"] == $_POST["email"]&&password_verify($usuario["password"], $_POST["password"])) {
      header("Location: inicio.php");
    }
    }
  }


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- link bootsrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Link fontawesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- Link a google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Link a CSS -->
  <link rel="stylesheet" href="css/index.css">
  <title>Index</title>
</head>
<body>

  <header>
    <!-- NABVAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
      <a class="navbar-brand" href="index.php">Logo</a>

      <div class="d-flex justify-content-end" id="navbarSupportedContent">

        <!-- BOTON DE LOGIN     -->
        <form class="form-inline my-2 my-lg-0">

          <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Acceder</button>

        </form>

        <!-- FORMULARIO DE LOGIN -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form  action="" method="post">

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                    <input type="text" class="form-control" id="recipient-name" name="email" value="<?=$email?>">
                    <span><?= $errores["email"]?></span>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="recipient-name" name="password" value="">
                    <span><?= $errores["password"]?></span>
                  </div>

                  <div class="d-flex justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Recordarme
                        </label>
                    </div>

                    <div class="form-group">
                      <a href="registro.php">Registrarme</a>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-dark">Aceptar</button>
                  </div>
                </form>
              </div>



            </div>
          </div>
        </div>

      </div>
    </nav>
  </header>

  <!-- CARRUSEL -->
  <div class="bd-example rounded mx-auto d-block">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="img/comidasDos.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/comidaTres.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/comida.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>

  <!-- SECTION INFORMATIVA -->
  <section class="text-center rounded mx-auto d-block my-5">

    <div class="row col-12">

      <div class="col-md-4">

        <a href="contacto.php"><i class="fas fa-map-marked-alt fa-3x red-text"></i></a>
        <h5 class="font-weight-bold my-4">Contactanos</h5>

      </div>

      <div class="col-md-4">

        <a href="FAQS.php"><i class="fas fa-book fa-3x cyan-text"></i></a>
        <h5 class="font-weight-bold my-4">FQA</h5>

      </div>

      <div class="col-md-4">

        <a href="#"><i class="far fa-address-card fa-3x orange-text"></i></a>
        <h5 class="font-weight-bold my-4">Nosotros</h5>

      </div>

    </div>

  </section>

  <!-- FOOTER -->
  <footer class="page-footer font-small cyan darken-3">

    <div class="container">
      <div class="row">

        <div class="col-md-12 py-5">
          <div class="d-flex justify-content-center">

            <!-- Facebook -->
            <a class="fb-ic" href="https://www.facebook.com/">
              <i class="fab fa-facebook-square fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic" href="https://www.twitter.com/">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic" href="https://www.linkedin.com/">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic" href="https://www.instagram.com/">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic" href="https://www.pinterest.com/">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>

      </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="inicio.php"> Logo.com</a>
    </div>

  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
