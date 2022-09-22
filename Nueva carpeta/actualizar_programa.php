<?php
  include('funciones.php');
  session_start();
  $vide=$_SESSION['ide1'];
  $vnombre=$_POST['nombre'];
  $vtipo=$_POST['tipos'];


  $miconexion=conectar_bd('', 'sena_bd');
  $resultado=consulta($miconexion,"update programa set nombrepro='{$vnombre}',progra_tipo='{$vtipo}',id_prog='{$vide}'");

  if ($resultado)
   {
     echo "Actualizacion exitosa";
    }
?>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>