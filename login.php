<?php
session_start();
if ($_POST) {
  $errores['login'] = [];
$json = file_get_contents("users.json");
  $usuarios = json_decode($json, true);
  // ERRORES DE login
  if(isset($_POST["email-log"])){
    if (strlen (trim($_POST["email-log"])) <= 0) {
      $errores['login']["email"] = "Completa el mail";
    }
    elseif(!filter_var($_POST["email-log"], FILTER_VALIDATE_EMAIL)) {
      $errores['login']["email"]="El mail no tiene el formato correcto";
    }
    if (strlen (trim($_POST["password-log"])) <= 0) {
      $errores['login']["password"] = "Completa tu contraseña";
    }
    elseif (strlen (trim($_POST["password-log"])) < 8){
      $errores['login']["password"]="Su Contraseña debe tener al menos 8 caracteres";
    }
// RECORDAR EL CORREO-------------------------------------------------------------------------------

// VERIFICACION DE CORREO Y Contraseña CORRECTOS---------------------------------------------------
    function verificarusuario($usuarios, $email,$password){
      foreach($usuarios as $usuario){
        if($usuario["email"] == $email && password_verify($password,$usuario["password"])){
          return $usuario;
        }
      }
      return false;
    }

    $usuario = verificarusuario($usuarios,$_POST['email-log'],$_POST['password-log']);

    if(!$usuario){
      $errores['login']['usuario'] = "El usuario no esta registrado.";
    }

    if(count($errores['login']) == 0){
      session_start();
      $_SESSION['usuario'] = $usuario;
      header('Location:inicio.php');
    }
  }
}



function usuarioLogeado($usuario)
{
  return isset($_SESSION[$usuario]);
}

 ?>
