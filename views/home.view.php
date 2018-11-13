<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
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
        <div id="latizq">
            <div id="usercontent">
                <a href="aboutme.php"> <img src="<?php echo $_SESSION["profilepic"]; ?>" alt="profile picture">
                <h3><?php echo $_SESSION["usuario"]; ?></h3></a>
            </div>
            <div>
                <form action="enviarMensaje.php" method="post">
                <textarea name="mensaje">
                </textarea>
                <input type="submit" value="Post">
                </form>
            </div>
        </div>
        <div id="latder">
                <?php
                    for($i = 0; $i < count($posts); $i++) {
                        echo "<div><img src='".$posts[$i][2]."' alt=''><h4>".$posts[$i][3]."</h4><p>".$posts[$i][1]."</p></div>";
                    }
                ?>
        </div>
    </div>
</body>
</html>