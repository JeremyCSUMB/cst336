<?php
include "../../inc/dbConnection.php";
$dbConn = startConnection("midterm");

function displayCities() { 
    global $dbConn;
    
    $sql = "SELECT * FROM mp_town";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        // echo "<option value='".$record['catId']."'>" . $record['catName'] . "</option>";
        if ( $record['population'] > 50000 && $record['population'] < 80000) {
            echo $record['town_name']." - ".$record['population'];
        }
    }
}
function displayPopulations() { 
    global $dbConn;
    
    $sql = "SELECT * FROM mp_town ORDER BY population DESC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        // echo "<option value='".$record['catId']."'>" . $record['catName'] . "</option>";
        echo $record['town_name']."         ".$record['population'];
        echo "</br>";
    }
}


function displayThreeLeast() { 
    global $dbConn;
    
    $sql = "SELECT * FROM mp_town ORDER BY population ASC LIMIT 3";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo $record['town_name']."         ".$record['population'];
        echo "</br>";
    }
}

function startsWithS() { 
    global $dbConn;
    
    $sql = "SELECT * FROM mp_county WHERE county_name LIKE 'S%'";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo $record['county_name'];
        echo "</br>";
    }
}

?>



<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        <?php
            displayCities();
            echo "</br></br>";
            displayPopulations();
            echo "</br></br>";
            displayThreeLeast();
            echo "</br></br>";
            startsWithS();
        ?>
    </body>
</html>