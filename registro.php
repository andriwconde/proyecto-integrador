<?php
// errores-------------------------------------------------------------------
$errores=[
  "email-log"=>"",
  "password-log"=>"",
  "email"=>"",
  "password"=>"",
  "direccion"=>"",
  "provincia"=>"",
  "usu-ya-regis"=>""
];

// validacion de login
if ($_POST) {
    if (filter_var($_POST["email-log"], FILTER_VALIDATE_EMAIL)== false) {
    $errores["email-log"]="El mail no tiene el formato correcto<br>";
  }

  if (strlen($_POST["password-log"])>8){
    $errores["password-log"]="Su Contraseña debe tener almenos 8 caracteres<br>";
  }
}

// validacion de registro
if ($_POST) {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)== true) {
      $errores["email"]="Exitoso<br>";
  }  else {
    $errores["email"]="El mail no tiene el formato correcto<br>";
  }

  if (strlen($_POST["password"])<8){
    $errores["password"]="Su Contraseña debe tener almenos 8 caracteres<br>";
  }
  if (strlen($_POST["direccion"])<3){
    $errores["direccion"]="debe llenar su direccion<br>";
  }
  if (strlen($_POST["provincia"])<3){
    $errores["provincia"]="debe llenar el campo provincia";
  }
}
// persistencia------------------------------------------------------------
$email="";
$password="";
$direccion="";
$provincia="";
if ($_POST){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $direccion = $_POST["direccion"];
  $provincia = $_POST["provincia"];
}
function verificarusuario($usuarios, $email){
  foreach($usuarios as $usuario){
    if($usuario["email"] == $email){
      return true;
    }
  }
  return false;
}

$usuarios=[];
if($_POST){
  $json = file_get_contents("users.json");
  $usuarios = json_decode($json, true);
  if(verificarusuario($usuarios, $_POST["email"])==true){
    $errores["usu-ya-regis"] = "el usuario ya esta registrado";
  }


  else{
  $usuario = [
    "email" => $_POST["email"],
    "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
    "pais" => $_POST["pais"],
    "provincia" => $_POST["provincia"],
    "direccion" => $_POST["direccion"],
  ];
  $usuarios[]=$usuario;
  $json = json_encode($usuarios, JSON_PRETTY_PRINT);
  file_put_contents("users.json", $json);
  }
}

function upload($name, $dir){
  if ($_FILES[$name]['error'] === UPLOAD_ERR_OK) {
    $ext = pathinfo($_FILES[$name]['name'], PATHINFO_EXTENSION);
    $hash =crypt($_FILES[$name]['name'], random_bytes(10));
    move_uploaded_file($_FILES[$name]['tmp_name'], "$dir/$hash.$ext");
  }
}
  if ($_FILES) {
    upload("fotode-perfil","archivos");
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
  <!-- Link a google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- link CSS -->
  <link rel="stylesheet" href="css/registro.css">
  <title>Registrarme!</title>
</head>
<body>
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
                    <input type="text" class="form-control" id="recipient-name" name="email-log" value="<?=$email?>">
                    <span><?= $errores["email-log"]?></span>
                  </div>

                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="recipient-name" name="password-log" value="<?=$password?>">
                    <span><?= $errores["password-log"]?></span>
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
  <div class="d-flex justify-content-center my-5">

    <form action="registro.php" method="post" enctype="multipart/form-data">

      <h1 class="form-grup col-md-12">Bienvenido a...</h1>

      <h5 class="form-grup col-md-12">Segui los pasos para registrarte  <br> <?=$errores["usu-ya-regis"]?></h5>

      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Email" name="email"value="<?=$email?>">
            <span><?=$errores["email"];?></span>
          </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password"value="<?=$password?>">
            <span><?=$errores["password"];?></span>
          </div>
      </div>

          <div class="form-group">
            <label for="inputAddress">Dirección</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Ej: Arenales 3062" name="direccion"value="<?=$direccion?>">
            <span><?=$errores["direccion"];?></span>
          </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Provincia</label>
            <input type="text" class="form-control" id="inputCity" name="provincia"value="<?=$provincia?>">
            <span><?=$errores["provincia"];?></span>
          </div>

          <div class="form-group col-md-6">
            <label for="inputState">Pais</label>
            <select id="inputState" class="form-control" name="pais">
              <option selected>Argentina</option>
              <option>Brasil</option>
              <option>Chile</option>
              <option>Uruguay</option>
            </select>
          </div>
          <div class="col-xl-12">
            <label for="avatar" class="col-xl-12">Adjuntar foto de perfil<br></label>
            <input type="file" name="fotode-perfil" value="" class="m-2">
          </div>
          <button type="submit" class="btn btn-outline-dark align-items-end ml-3">Registrarme</button>

    </form>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
