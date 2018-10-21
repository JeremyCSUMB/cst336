<?php

function readData() {
    $number = $_GET['num'];
    $type = $_GET['type'];
    $amount = $_GET['amount'];
    $range = $_GET['range'];
    $check = $_GET['check'];
    if ($type == 'bin') {
        convertToBinary($number, $amount, $range, $check);
    } else if ($type == 'hex') {
        convertToHex($number, $amount, $range, $check);
    }
}

function convertToBinary($num, $amount, $range, $check) {
    if ($num < 0) {
        $num = abs($num);
        echo "<h3> ERROR: Please enter positive numbers only! </h3>";
    }

    echo "<h2> Here is your original number: " . $num . "</h3><br>";
    echo "<h2> Here is your number converted to BIN: " . decbin($num) . "</h3><br>";
    echo "<h2>Here are your binary values</h2><br>";
    for ($i = 0; $i < $amount; ++$i) {
        $rand = decbin(rand(0, $range));
        if ($check == "true") {
            echo "<h3>";
            echo $i + 1 . ": ";
            echo "$rand";
            echo "</h3><br>";
        } else {
            echo "<h3>$rand</h3><br>";
        }
    }
}

function convertToHex($num, $amount, $range, $check) {
    if ($num < 0) {
        $num = abs($num);
        echo "<h3> ERROR: Please enter positive numbers only! </h3>";
    }
    echo "<h2> Here is your original number: " . $num . "</h3><br>";
    echo "<h2> Here is your number converted to HEX: " . dechex($num) . "</h3><br>";
    echo "<h2>Here are your hexadecimal values</h2><br>";
    for ($i = 0; $i < $amount; ++$i) {
        $rand = dechex(rand(0, $range));
         if ($check == "true") {
            echo "<h3>";
            echo $i + 1 . ": ";
            echo "$rand";
            echo "</h3><br>";
        } else {
            echo "<h3>$rand</h3><br>";
        }
    }
}

?><?php

function readData() {
    $number = $_GET['num'];
    $type = $_GET['type'];
    $amount = $_GET['amount'];
    $range = $_GET['range'];
    $check = $_GET['check'];
    if ($type == 'bin') {
        convertToBinary($number, $amount, $range, $check);
    } else if ($type == 'hex') {
        convertToHex($number, $amount, $range, $check);
    }
}

function convertToBinary($num, $amount, $range, $check) {
    if ($num < 0) {
        $num = abs($num);
        echo "<h3> ERROR: Please enter positive numbers only! </h3>";
    }

    echo "<h2> Here is your original number: " . $num . "</h3><br>";
    echo "<h2> Here is your number converted to BIN: " . decbin($num) . "</h3><br>";
    echo "<h2>Here are your binary values</h2><br>";
    for ($i = 0; $i < $amount; ++$i) {
        $rand = decbin(rand(0, $range));
        if ($check == "true") {
            echo "<h3>";
            echo $i + 1 . ": ";
            echo "$rand";
            echo "</h3><br>";
        } else {
            echo "<h3>$rand</h3><br>";
        }
    }
}

function convertToHex($num, $amount, $range, $check) {
    if ($num < 0) {
        $num = abs($num);
        echo "<h3> ERROR: Please enter positive numbers only! </h3>";
    }
    echo "<h2> Here is your original number: " . $num . "</h3><br>";
    echo "<h2> Here is your number converted to HEX: " . dechex($num) . "</h3><br>";
    echo "<h2>Here are your hexadecimal values</h2><br>";
    for ($i = 0; $i < $amount; ++$i) {
        $rand = dechex(rand(0, $range));
         if ($check == "true") {
            echo "<h3>";
            echo $i + 1 . ": ";
            echo "$rand";
            echo "</h3><br>";
        } else {
            echo "<h3>$rand</h3><br>";
        }
    }
}

?>