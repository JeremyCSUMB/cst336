<?php

include "../../inc/dbConnection.php";
$dbConn = startConnection();

function displayCategories() {
    global $dbConn;
    
    $sql = "SELECT * FROM om_category ORDER BY catName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($records);
    
    echo "<hr>";
    // echo $records[2] . "<br>";
    // echo $records[1]['catDescription'] . "<br>";
    
    foreach ($records as $record) {
        echo "<option>" . $record['catName'] . "</option>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 6: Ottermart Product Search</title>
    </head>
    <body>
        <h1> Ottermart </h1>
        <h2> Product Search </h2>
        <form>
            Product: <input type="text" name="productName" placeholder="Product Keyword" />
            Category: <select name="category">
                <option value=""> Select One</option>
                <?=displayCategories()?>
            </select>
            <input type="submit" name="submit" value="Search!" />
            
        </form>
       
    </body>
</html>