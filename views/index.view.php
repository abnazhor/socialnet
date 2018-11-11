<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="views/main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input required type="text" name="usuario" placeholder="Usuario" value="<?php if($usuario != null && !$valid) { echo $usuario; }?>">
        <input required pattern="[0-9]*[a-zA-Z]*" type="password" name="pass" placeholder="Contraseña">
        <input type="submit" value="Iniciar sesión" name="login">
    </form>

    <div style="visibility: <?php echo $visibilidad ?>">
        <p style="visibility: <?php echo $visibilidad ?>">Ha ocurrido un error<?php echo $errores ?></p>
    </div>
</body>
</html>