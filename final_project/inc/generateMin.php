<?php
    include 'dbConnection.php';
    $dbConn = startConnection("ottercars");
    
    $sql = "SELECT MIN(price) FROM oc_autos";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    foreach($records as $record) {
            echo number_format($record['MIN(price)'], 2, '.', '');
    }
    

?>