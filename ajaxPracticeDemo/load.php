<?php

echo "<h2>sameer shaikh</h2>";

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action = "page2.php" method = "POST" enctype = "multipart/form-data">
            <center>
                user_name:<br>
                <input type="text" name="user_name" placeholder="Enter UserID" value="" required="" /> <br><br>
            Password:<br>
            <input type="password" name="password" placeholder="Enter Password" value="" required /><br>
            <br>
            <input type="submit" value="Log In" />
            </center>
        </form>
    </body>
</html>
