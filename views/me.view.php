<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="views/me.view.css" />
</head>

<body>
    <div id="header">
        <img src="<?php echo $profilepic ?>" alt="Imagen de perfil">
    </div>
    <div>
        <div id="posts">
            <?php
                for($i = 0; $i < count($posts); $i++) {
                    echo "<div><p>".$posts[$i][1]."</p></div>";
                }
            ?>
        </div>
        <div id="info">
            <form action="cerrarSesion.php" method="post">
                <input type="submit" value="Cerrar Sesión" name="logout">
            </form>
        </div>
    </div>
</body>

</html>