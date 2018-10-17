<?php
    
    function printYears($startYear, $endYear) {
        echo "<ul>";
        $sum = 0;
        $animals = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");
        for($i = $startYear; $i <= $endYear; ++$i) {
            $sum += $i;
            echo "<img src='img/".$animals[$i % 12].".png' alt='" .$animals[$i % 12]. "'>";
            if ($i % 100 == 0) {
                echo "<li> Year $i <strong>Happy New Century!</strong></li>"; 
                continue;
            }
            if ($i == 1776) {
                echo "<li> Year $i <strong>USA INDEPENDENCE!</strong></li>";
                continue;
            }
            echo "<li> Year $i </li>";
        }
        echo "</ul>";
        return $sum;
    }
    
    // function createTable($rows, $columns) {
    //     echo "<table style='width:100%'>";
    //     for ($i = 0; $i < $rows; ++$i) {
    //         echo "<tr>";
    //         for ($j = 0; $j < $columns; ++$j) {
    //             echo "<th> "
    //         }
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // }
    #"rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig"
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chinese Zodiac List</title>
        <style>
            body {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Chinese Zodiac List</h1>
        <form method="GET">
          Start Year: <input type="number" name="startYear"><br>
          End Year: <input type="number" name="endYear"><br>
          <input type="submit" value="Submit!">
        </form>
        <?php
            $sum = printYears($_GET['startYear'], $_GET['endYear']);
            echo "<h1>Year Sum: $sum</h1>";
        ?>
        
    </body>
</html>