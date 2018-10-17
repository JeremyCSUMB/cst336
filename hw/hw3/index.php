<?php
    session_start();
    include "inc/functions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RNG</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Chakra+Petch');
            @import url('css/styles.css');
        </style>
    </head>
    <body>
        <h1>Random Value Generator and Converter</h1>
        <div id="getForm">
            <form method="GET">
                Enter Decimal Number:
                <input name="num" type="number" value=0>
                <br>
                Select The Type of Number:
                <select name="type">
                    <option value="bin">Binary</option>
                    <option value="hex">Hexadecimal</option>
                </select>
                <br>
                Select the Amount you wish to generate:
                <select name="amount">
                    <option value=2>2</option>
                    <option value=4>4</option>
                    <option value=6>6</option>
                    <option value=8>8</option>
                </select>
                <br>
                Please select the max range of the random numbers:
                <br>
                    <input type="radio" name="range" value=10 checked="checked"> 10
                    <input type="radio" name="range" value=100> 100
                    <input type="radio" name="range" value=1000> 1000
                    <input type="radio" name="range" value=10000> 10000
                <br>
                <input type="checkbox" name="check" value="true" checked> Numbered List? <br>
                <input type="submit" name="submit" value="Submit!"/>
            </form>
        </div>
        <?php
            readData();
        ?>
        <footer>
            <hr>
            CST 336: Internet Programming &copy; 2018 Jeremy Shaw <br />
            <strong>Disclaimer:</strong> The information in this website is fake. I do not own Pokemon or the any of the associated images.
            <br />
            It is for educational purposes only.
            <br />
            
            <img src="../../img/otter.jpg" alt="CSUMB logo">
            <br />
            <img src="../../img/buddyprogram.png" alt="Buddy Program">
        </footer>
    </body>
</html>