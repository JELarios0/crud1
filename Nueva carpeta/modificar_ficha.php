<!DOCTYPE html>
<html>
  <head>
    <title>Modificación de Fichas</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ModificarF.css" rel="stylesheet"/>
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
                     <input class="form-control" type="number" name="numero" min="9999" max="9999999999" value="" placeholder="NUMERO" required/>
                     </div>
                     <br>
                        <div class="form-group cold-md-3">
                           <input class="btn btn-primary" type="submit" value="CONSULTAR" >
                           <input style="width: 10%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="VOLVER">
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
              $vnumero=$_POST['numero'];
              $miconexion=conectar_bd('', 'sena_bd');
              $resultado=consulta($miconexion,"select * from fichas where id_ficha='{$vnumero}'");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  $_SESSION['ide1']=$fila->id_ficha;
                  ?>
                <form id="formulario2" role="form" method="post" action="actualizar_ficha.php">
                    <div class="col-md-12">
                       <strong class="lgris">DATOS DE LA FICHA</strong><br>

                       <label class="lgris">NUMERO:</label>
                       <input class="form-control" type="number" name="numero" min="9999" max="9999999999" value="<?php echo $fila->id_ficha ?>" required/>
                       <br>
                       <label class="lgris">PROGRAMA:</label>
                       <input class="form-control" type="number" name="prograf" min="1" max="999999999999" value="<?php echo $fila->fichapro ?>" required/>

                       <br>
                       <input class="btn btn-primary" type="submit" value="ACTUALIZAR">
                       <input style="width: 10%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="VOLVER">
                       <br>
                    </div>
                </form>
                <?php
              }
            else{
                echo "No existen registros";
                }
            $miconexion->close();
          }?>
          </div>
       </div>
    </div>
  </body>
</html>