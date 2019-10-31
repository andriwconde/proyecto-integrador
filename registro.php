<?php
// errores-------------------------------------------------------------------
$errores=[
  "email"=>"",
  "password"=>"",
  "direccion"=>"",
  "provincia"=>"",
  "usu-ya-regis"=>""
];
if ($_POST) {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)== false) {
    $errores["email"]="El mail no tiene el formato correcto<br>";
  }
  if (strlen($_POST["password"])<8){
    $errores["password"]="Su Contraseña debe tener almenos 8 caracteres<br>";
  }
  if (strlen($_POST["direccion"])< 3){
    $errores["direccion"]="debe llenar su direccion<br>";
  }
  if (strlen($_POST["provincia"])< 3){
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
// ALMACENAR DATOS DEL FORMULARIO EN ARCHIVO JSON------------------------------------------------------------------------
// si existe post
$usuarios=[];
if($_POST){
  $json = file_get_contents("users.json");
  $usuarios = json_decode($json, true);
  if(verificarusuario($usuarios, $_POST["email"])==true){
    $errores["usu-ya-regis"] = "el usuario ya esta registrado";
  }

  // guardamos la informacion que ingreso el usuario en la variable $usuario
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
var_dump($_FILES)

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
          <div class="">
            <label for="avatar">Adjuntar foto de perfil<br></label>
            <input type="file" name="fotode-perfil" value="">
          </div>
          <label for=""><br></label>
        <button type="submit" class="btn btn-outline-dark align-items-end">Registrarme</button>
    </form>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
