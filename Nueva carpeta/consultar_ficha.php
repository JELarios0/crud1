<!DOCTYPE html>
<html>
  <head>
    <title>Consulta de ficha</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ConsultarF.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    <div id="divconsulta" class="container">
      <br>
      <div id="div2">
        <div id="div4">
            <form name="formulario" role="form" method="post">
              <div class="col-md-12">
                <strong class="lgris">INGRESAR CRITERIO DE BUSQUEDA</strong>
                <br><br>
                <div class="form-row">
                 <div class="form-group cold-md-3">
                 <input class="form-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="NUMERO"/>
                 </div>
                 <br>
                 <div class="form-group col-md-3">
                  <input class="form-control" style="text-transform: uppercase;" type="text" name="programa" value="" placeholder="PROGRAMA"/>
                 </div>
                 <br>
                 <div class="form-group col-md-3">
                 <input class="btn btn-primary" type="submit" value="Consultar ficha" >
                 <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
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
             $vnumero=$_POST['numero'];
             $vprogra=$_POST['programa'];
             $miconexion=conectar_bd('', 'sena_bd');
             $resultado=consulta($miconexion,"select * from fichas where trim(id_ficha) like '%{$vnumero}%' and (trim(fichapro) like '%{$vprogra}%')");
          if($resultado->num_rows>0)
            {
              while ($fila = $resultado->fetch_object())
                {
                   echo $fila->id_ficha." ".$fila->fichapro."<br>";
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