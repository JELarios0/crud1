<?php
  include('funciones.php');
     $vnumero=$_POST['numero'];
     $vprograma=$_POST['programa'];


     $miconexion=conectar_bd('','sena_bd');
     $resultado=consulta($miconexion,"insert into fichas (id_ficha,fichapro) values ('{$vnumero}','{$vprograma}')");

    if ($resultado)
      {
        echo "Guardado exitoso";
      }
?>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>