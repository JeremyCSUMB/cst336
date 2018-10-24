<?php

    function getData() {
        $month = $_GET["month"];
        $amount = $_GET["amount"];
        $country = $_GET["country"];
        $alpha = $_GET["alpha"];
        if (!isset($_SESSION["itinerary"])) {
            $_SESSION["itinerary"] = array();
        }
    
        $vacation = array();
        if (verifyData($month, $amount)) {
            echo "<h1> $month </h1>";
            if ($month != "") {
                if (!in_array($month, array_column($_SESSION["itinerary"], 'month'))) { // search value in the array
                    $vacation["month"] = $month;
                    $vacation["amount"] = $amount;
                    $vacation["country"] = $country;
                    array_push($_SESSION["itinerary"], $vacation);
                } else {
                    for ($i = 0; $i < sizeof($_SESSION["itinerary"]); ++$i) {
                        if ($_SESSION["itinerary"][$i]["month"] == $month) {
                            $_SESSION["itinerary"][$i]["amount"] = $amount;
                            $_SESSION["itinerary"][$i]["country"] = $country;
                            break;
                        }
                    }
                }
            }
        
        $countryList = determineCountry($country);
        $cityList = generateImageArray($countryList, $amount, $alpha);
        $imageList = generateImageLink($cityList, $country);
        $days = determineMonth($month);
        createTable($days, $amount, $imageList, $cityList);
        }
       
        printSession($_SESSION["itinerary"]);
    }
    
    function verifyData($month, $amount) {
        $cond = true;
        if ($month == "") {
            echo "You must select a month! <br>";
            $cond = false;
        }
        if (!isset($amount)) {
            echo "You must specify the number of locations! <br>";
            $cond = false;
        }
        return $cond;
    }
    
    function determineCountry($country) {
        $france = array("bordeaux", "le_havre", "lyon", 'montpellier', "paris", "strasbourg");
        $mexico = array("acapulco", "cabos", "cancun", "chichenitza", "huatulco", "mexico_city");
        $usa = array("chicago", "hollywood", "las_vegas", "ny", "washington_dc", "yosemite");
        $arr = array();
        if ($country == "fra") {
            $arr = $france;
        } else if ($country == "mex") {
            $arr = $mexico;
        } else {
            $arr = $usa;
        }
        return $arr;
    }
    
    function generateImageArray($arr, $amount, $alpha) {
        shuffle($arr);
        $resizedArr = array();
        for ($i = 0; $i < $amount; ++$i) {
            $resizedArr[] = $arr[$i];
        }
        if ($alpha == "az") {
            sort($resizedArr);
        } else if ($alpha == "za") {
            rsort($resizedArr);
        }
        return $resizedArr;
    }
    function generateImageLink($arr, $country) {
        $name = "";
        if ($country == "fra") {
            $name = "France";
        } else if ($country == "mex") {
            $name = "Mexico";
        } else {
            $name = "USA";
        }
        $finalImagesList = array();
        for ($i = 0; $i < sizeof($arr); ++$i) {
            $finalImagesList[] = "img/$name/". $arr[$i] . ".png";
        }
        return $finalImagesList;
    }
    
    function determineMonth($month) {
        $days = -1;
        if ($month == "nov") {
            $days = 30;
        } else if ($month == "dec") {
            $days = 31;
        } else if ($month == "jan") {
            $days = 31;
        } else {
            $days = 28;
        }
        return $days;
    }
    
    
    
    function getPicture($name) {
        echo "<img src=$name>";
    }
    
    function createTable($days, $amount, $imageList, $cityList) {
        $numbers = range(1, $days);
        shuffle($numbers);
        $arr = array();
        for ($i = 0; $i < $amount; ++$i) {
            $arr[] = $numbers[$i];
        }
        sort($arr);
        $count = 1;
        $index = 0;
        echo "<table style='width:100%'>";
        for ($i = 0; $i < 5; ++$i) {
            echo "<tr>";
            for ($j = 0; $j < 7; ++$j) {
                if ($count == $days + 1) {
                    break;
                }
                echo "<td>";
                echo $count;
                echo "<br>";
                if ($arr[$index] == $count) {
                    getPicture($imageList[$index]);
                    echo "<br>";
                    $output = str_replace('_', ' ', $cityList[$index]);
                    $output = ucwords($output);
                    echo ($output);
                    echo "<br>";
                    $index++;
                }
                echo "</td>";
                $count++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    
    function printSession($vacations) {
        foreach ($vacations as $vacation) {
            echo "<h3>Month: " . $vacation["month"] . ", visiting " . $vacation["amount"] . " places in " . $vacation["country"] . " </h3>";
        }
    }
?>