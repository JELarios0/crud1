<!DOCTYPE html>
<html>
  <head>
    <title>Modificación de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ActualizacionA.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="divconsulta" class="container">
       <br>
       <div id="div2">
          <div id="div4">
               <form name="formulario" role="form" method="post">
                 <div class="col-md-12">
                    <strong class="lgris">INGRESE CRITERIO DE BUSQUEDA</strong>
                    <br><br>
                    <div class="form-row">
                     <div class="form-group col-md-5">
                     <input class="form-control" type="number" name="numid" min="9999" max="9999999999" autofocus value="" placeholder="IDENTIFICACIÓN" />
                     <br>
                     </div>
                       <div class="form-group cold-md-3">
                       <input class="btn btn-primary" type="submit" value="CONSULTAR">
                       <input style="width: 20%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="Volver">
                       </div>
                    </div>
                    <br>
                 </div>
               </form>
               <br>
          </div>

          <div id="divconsulta2">
          <?php
          if ($_SERVER['REQUEST_METHOD']==='POST')
          {
              include('funciones.php');
              session_start();
              $vapre_numid=$_POST['numid'];
              $miconexion=conectar_bd('', 'Sena_bd');
              $resultado=consulta($miconexion,"select * from aprendices where apre_numid='{$vapre_numid}'");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  $_SESSION['ide1']=$fila->id_apre;
                  ?>
                <form id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
                    <div class="col-md-12">
                       <strong class="lgris">Datos del aprendiz</strong><br>

                       <label class="lgris">Id:</label>
                       <input class="form-control" type="text" name="ide1" disabled="disabled" value="<?php echo $fila->id_apre?>"/>

                       <label class="lgris">Nombres:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" required value="<?php echo $fila->apre_nombre ?>"/>

                       <label class="lgris">Apellidos:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="<?php echo $fila->apre_apellidos ?>" required/>

                       <label class="lgris">Dirección:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="<?php echo $fila->apre_direccion ?>" required/>

                       <label class="lgris">Teléfono:</label>
                       <input class="form-control" type="number" name="telefono" min="9999" max="9999999999" value="<?php echo $fila->apre_telefono ?>" required/>
                       <br>
                       <input class="btn btn-warning" type="submit" value="Actualizar">
                       <br>
                    </div>
                </form>
                <?php
              }
            else{ 
             
              echo "No existen registro";
              
            }
            $miconexion->close();
          }?>
          </div>
       </div>
    </div>
  </body>
</html>