<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Link fontawesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Link a google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/carrito.css">
    <title>micarrito</title>
  </head>
  <body>
    <header>
      <!-- NABVAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="inicio.html">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="#">Menu Lorem<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Menu Ipsum</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Manu Dolor</a>
            </li>

          </ul>

          <!-- BOTON DE LOGIN     -->
          <form class="form-inline my-2 my-lg-0">

            <a href="carrito.html"><button type="button" class="btn rounded-circle btn-outline-dark"><i class="fas fa-cart-arrow-down fa-1x red-text" id="carrito"></i></button></a>

          </form>

        </div>
      </nav>
    </header>

<!-- CARRITO -->
<section  class="d-inline-flex p-2 bd-highlight col-xl-8 tarjetaproducto ">
  <div class="card" class="row" class="col-xl-12">
      <div class= "producto" >
        <img src="img/comidaTres.jpeg" class="card-img-top" alt="producto">
        <div class="card-body">
        <h5 class="card-title">Almuerzo promoción</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Añadir a carrito</a>
        </div>
    </div>
  </div>
</section>

<aside  class=" col-md-4 d-flex flex-column justify-content-end bd-highlight mb-3 float-right shadow p-3 mb-5 bg-white rounded">
  <div class=" d-flex flex-column opciones flex-end justify-content-xl-between">
    <button type="button" name="button" class= " tn btn-primary btn-outline-dark"><a href="/inicio.html">Agregar mas platos</a></button>
    <button type="button" name="button"class= "tn btn-primary btn-outline-dark"><a href="#">Eliminar plato</a></button>
    <button type="button" name="button"class= "tn btn-primary btn-outline-dark" class= "botoncalendario"><a href="#">Agregar a calendario</a></button>
    <button type="button" name="button"class= " tn btn-primary btn-outline-dark" class= "botonfinalizar"><a href="#">Finalizar compra</a></button>
  </div>
  </aside>

  <section>
    <h2>Detalle de Facturación</h2>
    <hr>
    <div class="datosusuario shadow p-3 mb-5 bg-white rounded">
<ul>
  <li>Iberá 1234 - Depto.F</li>
  <li>C.P. 1429 - Núñez, Capital Federal</li>
  <li>Pepito Rodriguez / 1544667788</li>
</ul>
<a href="#" class= "botondireccion" class="btn btn-primary">Modificar dirección</a>
<br>
<h4>Medios de pago</h4>
<div class="custom-control custom-radio">
<ul class="list-group">
  <li class="list-group-item">
    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1">Efectivo</label>
</li>
  <li class="list-group-item">
    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">
    <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Tarjeta de débito
  </a>
  <div class="collapse" id="collapseExample">
    <ul class="list-group">
  <li class="list-group-item">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">  Visa</label>
    </div>
  </li>
  <li class="list-group-item">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">  American</label>
    </div>
  </li>
  <li class="list-group-item">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">  Hipotecario</label>
    </div>
  </li>
  <li class="list-group-item">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">  Galicia</label>
    </div>
  </li>
</ul></label>
</li>
<li class="list-group-item">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
<label class="custom-control-label" for="customRadio2">
  <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  Tarjeta de crédito
</a>
<div class="collapse" id="collapseExample">
  <ul class="list-group">
<li class="list-group-item">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">  Visa</label>
  </div>
</li>
<li class="list-group-item">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">  American</label>
  </div>
</li>
<li class="list-group-item">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">  Hipotecario</label>
  </div>
</li>
<li class="list-group-item">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">  Galicia</label>
  </div>
</li>
</ul></label>
</li>
  <li class="list-group-item">
    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio4">Mercadopago</label>
</li>
</ul>


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
        <a href="inicio.html"> Logo.com</a>
      </div>

    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
