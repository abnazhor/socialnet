<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="views/me.css" />
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION["loggedin"]) && $_SESSION != true) {
        header("Location: index.php");
        exit();
     } ?>
    <div id="centro">
        <h3>Hola, <?php echo $_SESSION["usuario"] ?></h3>
        <div id="der">
        <p>
            Bienvenido al menú del sistema. Desde aquí puedes ver lo bonito que es todo.
        </p><br>
        <form action="cerrarSesion.php" method="post">
            <input type="submit" value="Cerrar Sesión" name="logout">
        </form>
        <img src="<?php  echo $_SESSION["profilepic"] ?>">
        </div>
    </div>
</body>
</html>