<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action = "checklist.php" method = "POST">
            First Name: <input type = "text" name = "fname"><br>
            Last Name: <input type = "text" name = "lname"><br>
            <input type = "submit">
        </form>
    </body>
</html>
