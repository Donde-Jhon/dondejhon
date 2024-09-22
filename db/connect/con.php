<?php

function Connection()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "donde_jhon";
    $port = "";

    $con = mysqli_connect($host, $user, $pass, $db);

    if ($con->error) {
        die("error de conexion" . $con->error);
    }

    return $con;
}
