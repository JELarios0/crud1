<!DOCTYPE html>
<html lang="es">
<head>
    <title>crear programa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="CrearP.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div id="div1" class="container">
      <br>
        <div id="div2">
            <?php session_start();  if(! empty($_SESSION['usutipo']))  { ?> <img src=> <?php }  ?>
            <div id="div3" >
                <?php
                if($_SESSION['usutipo']=='ADMINISTRADOR')
                {
              ?>
                 <form id="formulario" role="form" method="post" action="guardado_programa.php">
                          <div class="col-md-12">
                                 <strong class="lgris">INGRESE LOS DATOS DEL PROGRAMA</strong>
                                  <br>
                                  <label class="lgris">NOMBRE</label>
                                  <input class="form-control" style="text-transform: uppercase;" type="text" name="nombre" value="" placeholder="nombres" required/>

                                  <label class="lgris">TIPO DE PROGRAMA</label>
                                  <div class="form-group col-xs-2">
                                        <?php

                                         include('funciones.php');
                                             $miconexion=conectar_bd('','sena_bd');
                                             $consulta = "SELECT * FROM programa";
                                             $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                        ?>
                                          <select class="form-control" name="tipos">
                                             <option value="" selected></option>
                                             <?php while ($opcion = $resultado -> fetch_object()) { ?>
                                             <option value=<?php echo $opcion->nombrepro ?></option>
                                             <?php } ?>
                                          </select>
                                     </div>             
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Guardar">
                                    <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="VOLVER">
                             </div>
                       </form>
                       <?php
                         }
                           else
                             {
                               echo "No tiene permisos para realizar esta acción";
                              }
                         ?> 
                        <br>
            </div>
        </div>
    </div> 
</body>
</html>