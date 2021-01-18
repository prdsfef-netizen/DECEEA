<?php
    $nombre=$_POST['nombre'];
    $tel=$_POST['telefono'];

    print("$nombre $tel");
    $conexion=""mysqli_connect("sql206.260mb.net","n260m_20111337","Gordito2");
        mysqli_connect_errno())
{
	echo "Error al conectaral MYSQL:".mysqli_connect_errno();
}

  
    mysqli_select_db($conexion,"n260m_20111337_CeeAnime") or die("Error de la seleccion");





?>    