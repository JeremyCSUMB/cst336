<?php
session_start();
    
    if (!isset($_SESSION['heads'])) {
        $_SESSION['heads'] = 0;
        $_SESSION['tails'] = 0;
        $_SESSION['tossHistory'] = array();
    }
    
    if (rand(0, 1) == 0 ) {
        $_SESSION['heads']++;
        $_SESSION['tossHistory'][] = 'H ';
    } else {
        $_SESSION['heads']++;
        $_SESSION['tossHistory'][] = 'T ';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>