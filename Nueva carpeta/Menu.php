<?php
include('funciones.php');
session_start();
$_SESSION['nuusuario'] = $_POST['nombreuser'];
$_SESSION['nclave'] = $_POST['contra'];
$miconexion=conectar_bd('', 'Sena_bd');
$resultado=consulta($miconexion,"select * from usuario where nombreuser='{$_SESSION['nuusuario']}' and contra='{$_SESSION['nclave']}'" )
?>

<!doctype html>
<html>
    <head>
    <strong><title>MENU PRINCIPAL</title></strong>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="stilyM.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
    <div id="div1" class="container">
     <br>
            <div id="div2">
                <?php 
                if ($resultado->num_rows>0) { ?> <img src=IMAGENES/logoSena.png> <?php } ?>
                <div id="div3">
                    <?php
                    if ($resultado->num_rows>0){
                        $fila = $resultado->fetch_object();
                        $_SESSION['usutipo']=$fila->usutipo;
                    
                    ?>
                   <strong><center> <label class="lgris">BIENVENIDO ADMIN</label><br>
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='registro_aprendiz.php'" value="REGISTRO DE APRENDIZ">
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='consulta_aprendiz.php'" value="CONSULTA DE APRENDIZ">
                        <br><br>
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='actualizar1_aprendiz.php'" value="ACTUALIZACION DE APRENDICES">
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='borrar_aprendiz.php'" value="BORRAR APRENICES">
                        <br><br>
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='crear_programa.php'" value="CREAR PROGRAMA">
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='consultar_programa.php'" value="CONSULTAR PROGRAMA">
                        <br><br>
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='modificar_programa.php'" value="MODIFICAR PROGRAMA">
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='borrar_programa.php'" value="ELIMINAR PROGRAMA">
                        <br><br>
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='crear_ficha.php'" value="CREAR FICHA">
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='consultar_ficha.php'" value="CONSULTAR FICHA">
                        <br><br>
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='modificar_ficha.php'" value="MODIFICAR FICHA">
                        <input style="width: 40%;" class="tr" type="button" onclick="location.href ='borrar_ficha.php'" value="ELIMINAR FICHA">
                        <br><br>
                        <input style="width: 30%;" class="tr" type="button" onclick="location.href ='index.php'" value="SALIR"> </center></strong>
                        
                        <?php
                        }
                        else
                        {
                            echo "Usuario o Clave Invalido";
                        }
                        $miconexion->close();
                        ?>
                </div>
            </div>
        </div>
    </body>
</html>