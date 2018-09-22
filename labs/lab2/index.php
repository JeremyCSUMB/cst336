<?php
include "inc/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id ="main">
            <?php 
                play();
            ?>
            <form>
                <input type="submit" value="Spin!"/>
            </form>
        </div>
        <br />
        <br />
        <br />
        <footer>
            <hr>
            CST 336: Internet Programming &copy; 2018 Jeremy Shaw <br />
            <strong>Disclaimer:</strong> The information in this website is fake.
            <br />
            It is for educational purposes only.
            <br />
            
            <img src="../../img/otter.jpg" alt="CSUMB logo">
            <br />
            <img src="../../img/buddyprogram.png" alt="Buddy Program">
        </footer>
    </body>
</html>