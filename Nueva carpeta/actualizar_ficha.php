<?php
  include('funciones.php');
  session_start();
  $vnumero=$_POST['numero'];
  $vprogra=$_POST['prograf'];


  $miconexion=conectar_bd('', 'sena_bd');
  $resulado=consulta($miconexion,"update fichas set id_ficha='{$vnumero}',fichapro='{$vprogra}'");
  if ($miconexion->affected_rows>0)
  {
      echo "Actualizacion exitosa";
  }
?>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>