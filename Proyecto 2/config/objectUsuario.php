<?php

include_once('Usuario.php');

if(isset($_POST['login'])){
    $user = $_POST['email'];
    $pass = $_POST['pass'];

    $usuario = new Usuario($user,$pass);
    $usuario->login();

    $response = $users->login($user,$pass);

   echo $response; 

   if ($response==="verdadero") {
      header("Location: ../home.php"); 
   }

   else{
      echo '<script language="javascript">alert("Error En Datos");</script>';
   }
}
if(isset($_POST['logout'])){
    unset($usuario);
    header("Location: ../index.php");
}

?>