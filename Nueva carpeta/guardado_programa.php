<?php
    include('funciones.php');
       $vnombre=$_POST['nombre'];
       $vtipo=$_POST['tipos'];
      
  
  
       $miconexion=conectar_bd('','sena_bd');
       $resultado=consulta($miconexion,"insert into programa(nombrepro,progra_tipo) values ('{$vnombre}','{$vtipo}')");

    if ($resultado)
       {
         echo "Guardado exitoso";
       }
   ?>
   <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver al menu">
   <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>