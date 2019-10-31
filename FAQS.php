<?php
// errores-------------------------------------------------------------------
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
// persistecia------------------------------------------------------------------------------------------------------\
$email="";
$password="";
if ($_POST){
  $email = $_POST["email"];
  $password = $_POST["password"];
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Frecuently Asked Questions</title>
  <link rel="stylesheet" href="css/FAQS.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container-fluid p-0 ">
  <header>
    <!-- NABVAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
      <a class="navbar-brand" href="index.php">Logo</a>

      <div class="d-flex justify-content-end" id="navbarSupportedContent">

        <!-- BOTON DE LOGIN     -->
        <form class="form-inline"id="botonhead">

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
                    <input type="password" class="form-control" id="recipient-name" name="password" value="<?=$password?>">
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
<section class="col-sm-12 p-0 col-xl-12">
  <div class="m-0" id="titulo">
    <h2 class="titulo d-flex align-items-end pl-xl-3 py-2">
      Frecuently Asked Questions</h2>
  </div>

  <div class="accordion m-0" id="accordionExample">
  <div class="card">
    <div class="card-header hiper" id="headingOne">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="pregunta1">
          Pregunta #1
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header hiper" id="headingTwo">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="pregunta2">
          Pregunta #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header hiper" id="headingThree">
      <h2 class="mb-0 hiper">
        <button class="btn btn-link hiper collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="pregunta3">
          Pregunta #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
