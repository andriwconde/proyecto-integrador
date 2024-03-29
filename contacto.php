<?php

require("login.php");
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
  <!-- link CSS -->
  <link rel="stylesheet" href="css/contacto.css">
  <link rel="stylesheet" href="css/header.css">
  <title>Contacto</title>
</head>
<body>

  <?php require("header.php") ?>
  <!-- SECCION INFORMATIVA -->
  <section>
    <div class="row col-12 my-5">

      <div class="col-xl-6 col-md-6 col-sm-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18578.596817506263!2d-58.45769966716822!3d-34.59751180350761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca0a456ebc33%3A0x2df36b80ae5e4db0!2sSerrano%20400%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1571622536822!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>

      <div class="col-md-6 d-flex flex-column">
        <h6>Telefono:</h6>
        <h6>Direccion:</h6>
        <h6>Email:</h6>
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
