<?php
require("login.php");


if ($_POST) {
  $errores['registro'] = [];
  $json = file_get_contents("users.json");
  $usuarios = json_decode($json, true);

   // ERRORES REGISTRO

   if(isset($_POST["email"])){
     if (strlen (trim($_POST["email"])) <= 0) {
       $errores['registro']["email"] = "Completa el mail";
     }
     elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
       $errores['registro']["email"]="El mail no tiene el formato correcto";
     }
     if (strlen (trim($_POST["password"])) <= 0) {
       $errores['registro']["password"] = "Completa tu contraseña";
     }
     elseif (strlen (trim($_POST["password"])) < 8){
       $errores['registro']["password"]="Su Contraseña debe tener al menos 8 caracteres";
     }
     if (strlen(trim($_POST["direccion"]))<3){
       $errores['registro']["direccion"]="debe llenar su direccion<br>";
     }
     if (strlen(trim($_POST["provincia"]))<3){
       $errores['registro']["provincia"]="debe llenar el campo provincia";
     }
     function upload($name, $dir = "archivos"){
       if (isset($_FILES[$name])) {
         $ext = pathinfo($_FILES[$name]["name"], PAHTHINFO_EXTENSION);
         $hash = md5(time() . $_FILES[$name]["temp_name"]);
         $path = "$dir\/$hash.$ext";
         move_uploaded_file($_FILES[$name]["temp_name"], $path);
         return $path;
       }
       return null;
     }

     if(count($errores['registro']) == 0){
       $usuario = [
         "email" => $_POST["email"],
         "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
         "pais" => $_POST["pais"],
         "provincia" => $_POST["provincia"],
         "direccion" => $_POST["direccion"],
         "avatar" => upload("avatar"),
       ];
       $usuarios[]=$usuario;
       $json = json_encode($usuarios, JSON_PRETTY_PRINT);
       file_put_contents("users.json", $json);
       header('Location:registro.php?mensaje=Ya te registraste');
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
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="css/header.css">
  <title>Registrarme!</title>
</head>
<body>


  <?php require("header.php"); ?>


  <div class="d-flex justify-content-center my-5" id="section">

    <form action="" method="post" enctype="multipart/form-data">

      <h1 class="form-grup col-md-12">Bienvenido a...</h1>

      <h5 class="form-grup col-md-12">Segui los pasos para registrarte </h5>
      <?= $errores['registro']['usuario'] ?? null ?>
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email"  value="<?= $_POST['email'] ?? null ?>">
            <?= $errores['registro']['email'] ?? null ?>
          </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" value="<?= $_POST['password'] ?? null ?>">
            <?= $errores['registro']['password'] ?? null ?>
          </div>
      </div>

          <div class="form-group">
            <label for="inputAddress">Dirección</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Ej: Arenales 3062" name="direccion" value="<?= $_POST['direccion'] ?? null ?>">
            <?= $errores['registro']['direccion'] ?? null ?>
          </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Provincia</label>
            <input type="text" class="form-control" id="inputCity" name="provincia" value="<?= $_POST['provincia'] ?? null ?>">
            <?= $errores['registro']['provincia'] ?? null ?>
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
          <div class="form-group col-xl-12">
             <input type="file" name="avatar" value="">
          </div>

          <button type="submit" class="btn btn-outline-dark align-items-end ml-3">Registrarme</button>

    </form>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
