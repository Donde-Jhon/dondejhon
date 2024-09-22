<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// login process
if (isset($_POST['submit'])) {
    require "../connect/con.php";
    $con = Connection();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // select user
    $sql = "SELECT * FROM users WHERE use_name = ? AND use_pass = ?";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $user, $pass);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($row['rol_id'] === 1) {
                    session_start();
                    $_SESSION["role"] = $row['rol_id'];
                    $_SESSION["id"] = $row['use_id'];
                    header("Location: ../../index.html");
                    $stmt->close();
                    $con->close();
                    exit;
                }
                if ($row['rol_id'] === 2) {
                    session_start();
                    $_SESSION["role"] = $row['rol_id'];
                    $_SESSION["id"] = $row['use_id'];
                    header("Location: ../../admin/index.php");
                    $stmt->close();
                    $con->close();
                    exit;
                }
            } else {
                echo "no existe";
            }
        } else {
            echo "Error al ejecutar la consulta.";
        }
    } else {
        echo "Error al preparar la consulta.";
    }
}
