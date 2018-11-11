<?php
    session_start();
    if($_SESSION) {
    require_once "structure/database.php";

    if(isset($_POST["mensaje"]) && $_POST["mensaje"] != ""){

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    }

    echo $_SESSION["userid"];
    echo $_POST["mensaje"];

    $sql = "INSERT INTO CONTENT(IDUSER, MESSAGE) VALUES(".$_SESSION["userid"].", '".$_POST["mensaje"]."');";
        if($conn->query($sql)) {
        header("Location: home.php");
        mysqli_close($conn);
        }
    } else {
        header("Location: home.php");
    }
}
?>