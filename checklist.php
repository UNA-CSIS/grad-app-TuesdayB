<!DOCTYPE html>
<?php
    session_start();
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo("<h3>Name: " . $_SESSION["fname"] . " " . $_SESSION["lname"] . "</h3>");
        ?>
        <h3>Classes Taken:</h3>
        <form action="accomplishments.php" name = "checklist" method="POST">
            <input type ="checkbox" name="courses[]">Object-Oriented Programming<br>
            <input type ="checkbox" name="courses[]">Systems Analysis & Design<br>
            <input type ="checkbox" name="courses[]">Advanced Programming<br>
            <input type ="checkbox" name="courses[]">Introduction to Networking<br>
            <input type ="checkbox" name="courses[]">Introduction to Computer Security<br>
            <input type = "submit"><br>
        </form>
    </body>
</html>
