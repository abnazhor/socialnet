<?php
    session_start();
    if(!$_SESSION && !$_SESSION["loggedin"]) {
        header("Location: index.php");
        exit();
    }

    require "getposts.php";

    require "views/home.view.php";
?>