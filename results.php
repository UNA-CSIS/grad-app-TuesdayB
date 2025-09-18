<!DOCTYPE html>
<?php
    session_start();
    function getverdict($accomplishments, $numcourses, $numcourseslisted) {
        $REQUIREDPERCENTAGE = 50;
        $percentcoursestaken = $numcourses / $numcourseslisted * 100;
        if ($percentcoursestaken >= $REQUIREDPERCENTAGE && is_numeric(strpos($accomplishments, 'PHP'))) {
            return true;
        }
        return false;
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo("<h4>Name: " . $_SESSION["fname"] . " " . $_SESSION["lname"] . "<br>");
            echo($_SESSION["numcourses"] . "/5 Courses Taken<br>");
            echo("Accomplishments:<br></h4>" . $_SESSION["accomplishments"] . "<br>");
            if(getverdict($_SESSION["accomplishments"], $_SESSION["numcourses"], 5)){
                $verdict = "You are accepted for a phone interview.";
            }
            else{
                $verdict = "Sorry, your application was rejected.";
            }
            echo("<h2>Verdict: " . $verdict . "</h2><br>");
        ?>
    </body>
</html>
