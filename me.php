<?php
    require_once "structure/database.php";
    
    if(!isset($_GET["usuario"])) {
        header("Location: home.php");
    }
    $usuario = $_GET["usuario"]; //Se debería de cambiar por el iduser o hacer que el nombre de usuario sea único.
    //Necesita atención!
    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    }
    
    $sql = "SELECT CONTENT.IDUSER, MESSAGE, PROFILEPIC, USUARIO FROM CONTENT JOIN USER_CONTENT ON USER_CONTENT.IDUSER = CONTENT.IDUSER JOIN USUARIOS ON USUARIOS.IDUSER = CONTENT.IDUSER WHERE USUARIO = '$usuario' ORDER BY NUM DESC LIMIT 10;";
    $result = $conn->query($sql);
    $posts = array();

    if($result->num_rows > 0) { //Obtención de los datos necesarios para mostrar la página.
        while($row = $result->fetch_assoc()) {
            $post = array();
            array_push($post, $row["IDUSER"]);
            array_push($post, $row["MESSAGE"]);
            array_push($post, $row["PROFILEPIC"]);
            array_push($post, $row["USUARIO"]);
            array_push($posts, $post);
        }
    }

    require "views/me.view.php";
?>