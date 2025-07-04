<?php
    $Num_Pastel=$_GET["Num_Pastel"];

    $conexion=new mysqli("localhost", "root", "", "pasteleria");

    if($conexion->connect_errno){
        echo "Fallo la conexion".$conexion->connect_errno;
        }

        $conexion->set_charset("utf8");

        $consulta="DELETE FROM pasteles WHERE Num_Pastel = '$Num_Pastel'";

$resultados=mysqli_query($conexion, $consulta);

    if(!$resultados) {
        echo "Error al eliminar".mysqli_error($conexion);
        }else
        {
            echo "Registro de pastel eliminada<br><br>";
          /*if(mysqli_affected_rows($conexion)==0){
            echo "No hay registros que eliminar en este criterio";
          }else{
            echo "Se ha eiminado el".msqli_affected_rows($conexion)."registros";
          }*/

        }
    $conexion->close();    
?>