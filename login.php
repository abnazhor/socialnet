<?php
    require_once "structure/database.php";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    }
    
    $sql = "SELECT USUARIOS.IDUSER, PROFILEPIC, HEADER FROM USUARIOS JOIN USER_CONTENT ON USUARIOS.IDUSER = USER_CONTENT.IDUSER WHERE PASS = '$pass' AND USUARIO = '$usuario';";
    $result = $conn->query($sql);
    
    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $header = $row["HEADER"];
        $profilepic = $row["PROFILEPIC"];
        $userid = $row["IDUSER"];
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["password"] = $password;
        $_SESSION["profilepic"] = $profilepic;
        $_SESSION["header"] = $header;
        $_SESSION["loggedin"] = true;
        $_SESSION["userid"] = $userid;
        header("Location: home.php");
        mysqli_close($conn);
        exit();
        }
    else {
        $errores .= "<br>El usuario o la contraseña son erróneos.";
        $visibilidad = "visible";
    }
?>