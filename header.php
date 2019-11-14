<header>
  <!-- NABVAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
    <a class="navbar-brand" href="index.php">Logo</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="inicio.php">Menu<span class="sr-only">(current)</span></a>
        </li>
</ul>
</div>

    <div class="d-flex justify-content-end" id="navbarSupportedContent">
      <!-- BOTON DE LOGIN     -->
      <?php if(!usuarioLogeado("usuario")):?>
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
                  <input type="email" class="form-control" id="recipient-name" name="email-log" value="<?= $_POST['email-log']?? null ?>">
                  <?= $errores['login']['email'] ?? null ?>
                </div>

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Contraseña:</label>
                  <input type="password" class="form-control" id="recipient-name" name="password-log" value="<?= $_POST['password-log']?? null  ?>">
                  <?= $errores['login']['password'] ?? null ?>
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
      <?php endif;?>
      <form class="form-inline my-2 my-lg-0">
        <?php if(usuarioLogeado("usuario")):?>
        <form class="form-inline my-2 my-lg-0">
          <a href="#" class=" mr-2" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            <button type="button" class="btn rounded-circle btn-outline-dark">
            <img src="<?= $usuario["avatar"]; ?>" class="rounded-circle rounded-sm" width="20"alt="">
            </button>
         </a>
         <a href="carrito.php">
           <button type="button" class="btn rounded-circle btn-outline-dark">
           <i class="fas fa-cart-arrow-down fa-1x red-text" id="carrito"></i>
           </button>
        </a>

        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PERFIL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

               <div class="d-flex justify-content-center col-12">
                   <img src="https://www.pinclipart.com/picdir/big/3-39434_mazeo-avatar-medium-600pixel-clipart-vector-clip-art.png" class="rounded-circle bg-dark p-2" width="100"alt="">
               </div>
               <button type="submit" name="cerrar-ses" ><a href="cerrar-sesion.php">Cerrar Sesion</a></button>
              </div>
            </div>
          </div>
        </div>

      <?php endif;?>

      </form>
    </div>
  </nav>
</header>
