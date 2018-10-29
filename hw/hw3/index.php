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
                <!--<input name="num" type="number" value=0>-->
                <input type="number" name="num" value="<?php echo isset($_GET['num']) ? $_GET['num'] : '' ?>" />
                <br>
                Select The Type of Number:
                <select name="type">
                    <option value="<?php echo isset($_GET['type']) ? $_GET['type'] : '' ?>"><?php echo isset($_GET['type']) ? $_GET['type'] : '' ?></option>
                    <option value="bin">Binary</option>
                    <option value="hex">Hexadecimal</option>
                </select>
                <br>
                Select the Amount you wish to generate:
                <select name="amount">
                    <option value="<?php echo isset($_GET['amount']) ? $_GET['amount'] : '' ?>"><?php echo isset($_GET['amount']) ? $_GET['amount'] : '' ?></option>
                    <option value=2>2</option>
                    <option value=4>4</option>
                    <option value=6>6</option>
                    <option value=8>8</option>
                </select>
                <br>
                Please select the max range of the random numbers:
                <br>
                    <input type="radio" name="range" value="<?php echo isset($_GET['range']) ? $_GET['range'] : '' ?>" <?php echo isset($_GET['range']) ? 'checked' : '' ?>> <?php echo isset($_GET['range']) ? $_GET['range'] : '' ?>
                    <br>
                    <input type="radio" name="range" value=10> 10
                    <input type="radio" name="range" value=100> 100
                    <input type="radio" name="range" value=1000> 1000
                    <input type="radio" name="range" value=10000> 10000
                <br>
                <input type="checkbox" name="check" value="true" <?php echo isset($_GET['check']) ? 'checked' : '' ?>> Numbered List? <br>
                <input type="submit" name="submit" value="Submit!"/>
            </form>
        </div>
        <?php
            readData();
        ?>
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