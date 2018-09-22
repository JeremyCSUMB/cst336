<?php

    function getLuckyNumber() {
        do {
            $num = rand(1, 10);
        } while($num == 4);
        echo $num;
    }

    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
            
        </title>
    </head>
    <body>
        <h1>
            My lucky number is:
            <?php
                getLuckyNumber();
                echo "background-color: "
            ?>
        </h1>
    </body>
</html>