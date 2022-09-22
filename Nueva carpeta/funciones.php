<?php
    function conectar_bd($clave,$basededatos)
    {
        $miconexion = new mysqli('localhost','root',$clave,$basededatos);

        if ($miconexion->connect_error)
        {
            die('Error de Conexión (' . $miconexion->connect_error . ')' . $miconexion->connect_error);
        }
    return $miconexion;
    }

    function consulta ($miconexion,$consulta_sql)
        {
            $resultado=$miconexion->query($consulta_sql);

            if (!$resultado)
            {
                 echo 'No se pudo ejecutar la consulta: ' . $miconexion->error;
                exit;
            }

    return  $resultado;
        }
?>