<?php
    include '../../inc/dbConnection.php';
    $dbConn = startConnection("ottermart");
    
    function displayCategories() { 
        global $dbConn;
        $sql = "SELECT * FROM om_category ORDER BY catName";
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $record) {
            echo "<option value='".$record['catId']."'>" . $record['catName'] . "</option>";
        }
    }
    function displaySearchResults() {
        global $dbConn;
        $namedParameters = array();
        $product = $_GET['productName'];
        $sql = "SELECT * FROM om_product WHERE 1";
        if (!empty($product)){
             $sql .=  " AND productName LIKE :product";
             $namedParameters[':product'] = "%$product%";
        }
        if (!empty($_GET['category'])){
             $sql .=  " AND catId =  :category";
              $namedParameters[':category'] = $_GET['category'] ;
        }
        if (isset($_GET['orderBy'])) {
            if ($_GET['orderBy'] == "productPrice") {
                $sql .= " ORDER BY price";
            } else {
                  $sql .= " ORDER BY productName";
            }
        }
        $stmt = $dbConn->prepare($sql);
        $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);  
        foreach ($records as $record) {
            echo "<a href='productInfo.php?productId=".$record['productId']."'>";
            echo $record['productName'];
            echo "</a> ";
            echo $record['productDescription'] . " $" .  $record['price'] .   "<br>";   
        }
    }
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title>OtterMart Product Search</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <style>
            @import url('https://fonts.googleapis.com/css?family=Open+Sans');
        </style>
    </head>
    <body>
        <div>
            <h1> OtterMart Product Search </h1>
            <form>
                Product: <input type="text" name="productName" />
                <br><br>
                Category:
                    <select name="category">
                        <option value="">Select One</option>
                        <?=displayCategories()?>
                    </select>
                <br><br>
                Price: From <input type="text" name="priceFrom" size="7"/>
                       To <input type="text" name="priceFrom" size="7"/>
                <br><br>
                Order result by:
                <br><br>
                
                <input type="radio" name="orderBy" value="productPrice"/> Price <br>
                <input type="radio" name="orderBy" value="productName"/> Name <br>
                
                <br>
                <input type="submit" value="Search" name="searchForm" />
            </form>
            
            <br />
            
        </div>
        
        <hr>
        <?= displaySearchResults() ?>
    </body>
</html>