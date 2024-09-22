<?php

// logic for register process
if (isset($_POST['submit'])) {
    require "../connect/con.php";
    $con = Connection();
    // id generator
    $id = str_pad(random_int(0, 99999999), 10, '0', STR_PAD_LEFT);
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $role = "1";

    // verify
    $sql = "SELECT * FROM users WHERE use_name = ?";
    $stmt = $con->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: ../../signup.html");
            $stmt->close();
            $con->close();
            exit;
        }
    } else {
        echo "error";
        exit;
    }

    // add user
    $sql = "INSERT INTO users (use_id, rol_id, use_name, use_pass) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("iiss", $id, $role, $user, $pass);
        if ($stmt->execute()) {
            $stmt->close();
            $con->close();
            header("Location: ../../signin.html");
            exit;
        } else {
            echo "error 1";
        }
    } else {
        echo "error 2";
    }
}
