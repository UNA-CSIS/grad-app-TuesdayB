<!DOCTYPE html>
<?php
    session_start();
    $_SESSION["accomplishments"] = $_POST['accomplishments'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Confirmation: </h1><br>
        <?php
            echo("<h3>Name: " . $_SESSION["fname"] . " " . $_SESSION["lname"] . "<br>");
            echo($_SESSION["numcourses"] . "/5 Courses Taken<br>");
            echo("Accomplishments:<br>" . $_SESSION["accomplishments"] . "</h3><br>");
        ?>
        <form action = "results.php" method = "POST">
            <input type = "submit">
        </form>
    </body>
</html>
