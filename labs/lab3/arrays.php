<?php

    function displayArray() {
        global $symbols;
        echo "<hr>";
        print_r($symbols);
        for ($i = 0; $i < count($symbols); ++$i) {
            echo $symbols[$i].", ";
        }
        
    }
    $symbols = array("seven");
    //print_r($symbols); //displays array content
    
    array_push($symbols, "orange", "grapes", "cherry");
    print_r($symbols);
    displayArray();
    sort($symbols);
    displayArray();
    rsort($symbols);
    displayArray(); 
    unset($symbols[2]); //Remove an element in the array
    displayArray();
    
    $symbols = array_values($symbols);
    displayArray();
    
    shuffle($symbols);
    displayArray();
    echo "<hr>";
    // echo "\nRandom item: ".$symbols[rand(0, count($symbols)-1)];
    $win = array();
    $symbol = $symbols[rand(0, count($symbols)-1)];
    array_push($win, $symbol);
    echo "<img src='../lab2/img/$symbol.png' alt='$symbol' title='".ucfirst($symbol)."'/>";
    $symbol = $symbols[rand(0, count($symbols)-1)];
    array_push($win, $symbol);
    echo "<img src='../lab2/img/$symbol.png' alt='$symbol' title='".ucfirst($symbol)."'/>";
    $symbol = $symbols[rand(0, count($symbols)-1)];
    array_push($win, $symbol);
    echo "<img src='../lab2/img/$symbol.png' alt='$symbol' title='".ucfirst($symbol)."'/>";
    $points = array("orange"=>250, "cherry"=>500);
    $points["seven"] = 1000;
    //echo $points[$symbol]
    if ($win[0] == $win[1] && $win[1] == $win[2]) {
        $score;
        if ($win[0] == "cherry") {
            $score = $points["cherry"];
        } else if ($win[0] == "orange") {
            $score = $points["orange"];
        } else {
            $score = $points["seven"];
        }
        echo "Congrats! Points won: ".$score;
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Review: Arrays</title>
    </head>
    <body>

    </body>
</html>