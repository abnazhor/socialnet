<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Socialnet V0.1 - Home</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let elem = document.getElementsByTagName("textarea")[0];
            elem.value = "";
        });
    </script>
    <link type="text/css" href="views/home.css" rel="stylesheet">
</head>
<body>
    <div id="allcontent">
        <div id="header">
            <div id="usercontent">
                <a href="me.php?usuario=<?php echo $_SESSION["usuario"] ?>"> <img src="<?php echo $_SESSION["profilepic"]; ?>" alt="profile picture"></a>
            </div>
        </div>
            <div id="message">
                <form action="enviarMensaje.php" method="post">
                <textarea name="mensaje" maxlength="250">
                </textarea>
                <input type="submit" value="Post">
                </form>
            </div>
        <div id="content">
                <?php
                    for($i = 0; $i < count($posts); $i++) {
                        echo "<div><img src='".$posts[$i][2]."' alt=''><p>".$posts[$i][1]."</p></div>";
                    }
                ?>
        </div>
    </div>
</body>
</html>