<!DOCTYPE html>
<html>
  <head>
    <title>Consulta de Aprendices</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ConsultaA.css" rel="stylesheet"/>
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
                 <div class="form-group col-md-3">
                 <input class="form-control" type="number" name="numid" min="9999" max="9999999999" value="" placeholder="IDENTIFICACIÓN" />
                 </div>
                 <br>
                 <div class="form-group cold-md-3">
                  <input class="form-control" style="text-transform: uppercase;" type="text" name="nombres" value="" placeholder="Nombres" />
                 </div> 
                 <br>          
                 <div class="form-group col-md-3">
                  <input class="form-control" style="text-transform: uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" />
                 </div>
                 <br>
                 <div class="form-group col-md-3">
                 <input class="btn btn-warning" type="submit" value="Consultar" >
                 <input style="width: 40%;" class="btn btn-warning" type="button" onclick="location.href ='menu.php'" value="Volver">
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
          $vnumid=$_POST['numid'];
          $vnombres=$_POST['nombres'];
          $vapellidos=$_POST['apellidos'];
          $miconexion=conectar_bd('', 'Sena_bd');
          $resultado=consulta($miconexion,"select * from aprendices where trim(apre_numid) like '%{$vnumid}%' and (trim(apre_nombre) like '%{$vnombres}%' and trim(apre_apellidos) like '%{$vapellidos}%')");
          
          if($resultado->num_rows>0)
            {
              while ($fila = $resultado->fetch_object())
                {
                  echo $fila->id_apre." ".$fila->apre_idtipo." ".$fila->apre_numid." ".$fila->apre_nombre." ".$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";
                }
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