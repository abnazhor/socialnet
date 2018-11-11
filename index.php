<?php

    session_start();
    if($_SESSION == true && $_SESSION["loggedin"]) {
        header("Location: home.php");
        exit();
    }

    if(isset($_POST["login"])) {
    $valid = true;
    $errores = "";
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];
    $visibilidad ="";

    if($usuario != "") {
        $usuario = $_POST["usuario"];
    } else {
        $valid = false;
        $errores .= "<br>Introduzca un nombre de usuario.";
    }

    if($pass != "") {
        $pass = $_POST["pass"];
    } else {
        $valid = false;
        $errores .= "<br>Introduzca una contraseña.";
    }

    if(!$valid) {
        $visibilidad = "visible";
    } else {
        require("login.php");
    }

    } else {
        $visibilidad = "hidden";
        $usuario = null;
        $pass = null;   
    }
    require("views/index.view.php");
?>