<?php

    function displayHistory() {
        //for ($i=0; $i < count($_SESSION["history"]); $i++) {
            print_r( $_SESSION["history"]);
            echo "Hello";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
            displayHistory();
        ?>
    </body>
</html>