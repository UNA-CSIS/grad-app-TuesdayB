<!DOCTYPE html>
<?php
    session_start();
    $courses = (isset($_POST['courses'])) ? $_POST['courses'] : array();
    $_SESSION["numcourses"] = count($courses);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo("<h3>");
            echo("<h3>Name: " . $_SESSION["fname"] . " " . $_SESSION["lname"] . "<br>");
            echo($_SESSION["numcourses"] . "/5 Courses Taken</h3>");
        ?>
        <form action = "confirmation.php" method = "POST">
            Personal Accomplishments:<br> 
            <textarea name = "accomplishments" rows = "20" cols = "100"></textarea>
            <br>
            <input type = "submit">
        </form>
    </body>
</html>