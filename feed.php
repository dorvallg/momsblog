<?php
    if($_POST) {
        $name = $_POST['name'];
        $content = $_POST['commentContent'];
        $handle = fopen("favs.html", "a");
        fwrite($handle, "<b>" . $name . "</b>:<br/>" . $comment . "<br/>");
        fclose($handle);
    }


?>



<html>
    <body>
        <form action = "" method = "POST">
            Comments: <textarea rows = "10" cols = "30" name = "commentContent"></textarea><br/>
            Name: <input type = "text" name = "name"><br/>
            <input type = submit value = "Post!"><br/>
        </form>
        <?php include "favs.html"; ?>
    </body>
</html>

