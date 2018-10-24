<?php

    function createTable() {
        echo "<table style='width:100%'>";
        
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                $k = ($i * 7) + $j + 1;
                echo "<th>";
                echo $k;
                echo "<br>";
                printPicture();
                echo " </th>";
            }
            echo "</tr>";
            echo "<br>";
        }
    }
    
    function generateNumbers($size=3) {
        $arr = array();
        for ($i = 0; $i < $size; ++$i) {
            
        }
    }
    
    function printPicture($country="Mexico") { // fix mexico city
        $dir = "img/$country/";
        $imagesArray = glob($dir.'*.png');
        $rand = array_rand($imagesArray);
        $randomImage = $imagesArray[$rand];
        $dirSize = strlen($dir);
        
        $name = substr($randomImage, $dirSize, -4);
        $name = str_replace("_"," ",$name);
        $name = ucwords($name);
        
        echo "<img src=$randomImage alt='mexico'>";
        echo "<br>";
        echo $name;
        
    }
?>