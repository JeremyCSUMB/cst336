<?php
    include 'dbConnection.php';
    $dbConn = startConnection("ottercars");
    
    $sql = "SELECT MAX(price) FROM oc_autos";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); 

    foreach($records as $record) {
            echo $record['MAX(price)'];
    }

?>