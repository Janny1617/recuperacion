<?php
    $Num_Pastel = $_GET["Num_Pastel"];
    $NombreC = $_GET["NombreC"];
    $NomPastel= $_GET["Pastel"];
    $Precio = $_GET["Precio"];
    $CantidadP = $_GET["CantidadP"];

    $conexion=new mysqli("localhost", "root", "", "pasteleria");

    if($conexion->connect_errno) {
        echo "Fallo la conexion".$conexion->connect_errno;
    }

        $conexion->set_charset("utf8");

        $consulta = "INSERT INTO pasteles (Num_Pastel, NombreC, NomPastel, Precio, CantidadP)
        VALUES ('$Num_Pastel', '$NombreC', '$NomPastel', '$Precio', '$CantidadP')";

$resultados = mysqli_query($conexion, $consulta);

    if($conexion->errno) {
        echo "Error al agregar".mysqli_error($conexion);
        }else
        {
            echo "Datos agregados<br><br>";

            echo "<table> <tr> <td> Num_Pastel: </td><td> $Num_Pastel </td></tr>";
            echo "<tr> <td>  NombreC: </td><td> $NombreC </td></tr>";
            echo "<tr> <td> NomPastel: </td><td> $NomPastel </td></tr>";
            echo "<tr> <td> Precio: </td><td> $Precio </td></tr>";
            echo "<tr> <td> CantidadP: </td><td> $CantidadP </td></tr></table>";

        }
    $conexion->close();    
?>