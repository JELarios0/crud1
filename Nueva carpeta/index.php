<!doctype html>
<html>
    <head>
        <title>LOGIN</title>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="estilos.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body >
        <div id="div1" class="container">
            <br>
            <div id="div2">
                <img src="IMAGENES/logoSena.png" width="290px" height=" 220 px">
                <div id="div3">
                    <form id="formulario" method="post" action="menu.php">
                        <br>
                        <br>
                        <strong class="lgris">INGRESE SU USUARIO Y CONTRASEÑA</strong>
                        <br>
                        <br>
                        <label class="lgris">NOMBRE DE USUARIO:</label>
                        <br>
                        
                        <input class="btn btn-outline-warning" style="text-transform: uppercase;" type="text" name="nombreuser" value="" />
                        <br>
                        <br>
                        <label class="lgris">CONTRASEÑA:<div class="ub1">
                        <input class="btn btn-outline-warning" type="password" name="contra" value="" />
                        <br>
                        <br>
                        <input class="btn btn-success" type="submit" value="Iniciar Sesión">
                    
                        <br><br>
                        <h1 class="titulo">BIENVENIDO AL CRUD 1</h1>
                    </form>
                </div>
            </div>  
        </div>
        <br><br>
    </body>
</html>