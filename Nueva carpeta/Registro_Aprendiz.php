<!doctype html>
<html>
  <head>
    <title>REGISTRO DE APRENDIZ</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="stiloRA.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
    

  </head>
  <body  >
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <?php session_start(); if (! empty($_SESSION['usutipo'])) {?>
            <img src=""> <?php } ?>
           <div id="div3">
            <?php
            if ($_SESSION['usutipo']=='ADMINISTRADOR'){
                ?>  
             <form id="formulario" role="form" method="post" action="guardado_aprendiz.php">
              <div class="r">
                <strong class="lgris">INGRESE LOS DATOS DEL APRENDIZ</strong>
                <br>
                <label class="l">IDENTIFICACIÓN:</label>
                <div class="l">

                <div class="t">
                 <select class="q" name="tipoid">
                    <option value="CC" selected>CC</option>
                    <option value="TI">TI</option>
                    <option value="RC">RC</option>
                    <option value="PEP">PEP</option>
                 </select>
              </div>
              <br>
                 <div class="s">
                        <input class="form-control input-lg" type="number" name="numid" min="9999" max="9999999999" value="" placeholder="IDENTIFICACIÓN" required/>
                </div>
                </div>
                <div class="t">
                 <label class="s">NOMBRES:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" value="" placeholder="Nombres" required/>

                 <label class="s">APELLIDOS:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="" placeholder="Apellidos" required/>
                 
                 <label class="s">DIRECCIÓN:</label>
                 <input class="form-control" style="text-transform:uppercase;" type="text" name="direccion" value="" placeholder="DIRECCIÓN" required/>
                 
                 <label class="s">TELÉFONO:</label>
                <input class="form-control" type="number" name="telefono" min="9999" max="9999999999" value="" placeholder="TELÉFONO" required/>
                
                <label class="s">FICHA:</label>
                <input class="form-control" type="number" name="ficha" min="9999" max="9999999999" value="" placeholder="FICHA" required/>
                <br>
                <input class="btn btn-primary" type="submit" value="GUARDAR">
              </div>
             </form>
                <?php 
                }
                else{
                    echo "No tiene permisos para ralizar esta acción";
                }
            ?>
            <br>
           </div>
        </div>
    </div>
  </body>
</html>