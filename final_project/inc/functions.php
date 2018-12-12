<?php

function validateSession(){
    if (!isset($_SESSION['adminFullName'])) {
        header("Location: loginScreen.php");  //redirects users who haven't logged in 
        exit;
    }
}


function displayAllProducts(){
    global $dbConn;
    
    $sql = "SELECT * FROM oc_autos ORDER BY productName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records

    foreach ($records as $record) {
        echo "<a class='btn btn-primary' role='button' href='updateProduct.php?productId=".$record['productId']."'>Update</a>";
        echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
        echo "   <input type='hidden' name='productId' value='".$record['productId']."'>";
        echo "   <button class='btn btn-outline-danger' type='submit'>Delete</button>";
        echo "</form>";
        
        echo "[<a 
        
        onclick='openModal()' target='productModal'
        href='productInfo.php?productId=".$record['productId']."'>".$record['productName']."</a>]  ";
        echo " $" . $record[price]   . "<br><br>";
        
    }
}

function getCategories($tableName="oc_brand", $columnName="brandName") {
    global $dbConn;
    
    $sql = "SELECT * FROM $tableName ORDER BY $columnName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records   
    
    //print_r($records);
    
    return $records;
    
}

function getProductInfo($productId) {
     global $dbConn;
    
    $sql = "SELECT * FROM oc_autos WHERE productId = $productId";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting multiple records   
    
    return $record;
     
    
}

function displayResults() {
    global $dbConn;

    
    $namedParameters= array();
    $product = $_GET['productName'];
    $sql= "SELECT * FROM oc_autos WHERE 1";
    
    if (isset($_GET) && !empty($_GET)) {
        // if (isset($product)){
        //     else {
        //         echo "<h2> Product name cannot be empty! </h2>";
        //         return; 
        //     }
        // }
        if (!empty($product)) {
                $sql .=  " AND productName LIKE :product";
                $namedParameters[':product'] = "%$product%";   
            } 
    
        if (!empty($_GET['brand'])){
            $sql .=  " AND brandId =  :brand";
            $namedParameters[':brand'] = $_GET['brand'];
        }
        
        if (!empty($_GET['color'])){
            $sql .=  " AND colorId =  :color";
            $namedParameters[':color'] = $_GET['color'];
        }
        if (!empty($_GET['type'])){
            $sql .=  " AND typeId =  :type";
            $namedParameters[':type'] = $_GET['type'];
        }
     
        
        $sql .= " ORDER BY productName " . $_GET["order"];
        
        $stmt = $dbConn->prepare($sql);
        $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
        if (empty($records)) {
            echo "<h2> No product results! </h2>";
            return;
        }
        
        $i = 0;
        
        echo "<table border = '1' align='center' width='100%'>";
        
        while ($i < 10 && $i < count($records)) {
            $record = $records[$i];
            
            echo "<tr>";
            echo "<td><img src = '". $record["productImage"] . "' height='100px' width='150px'></td>";
            echo "<td><h4>". $record["productName"] . "<br />";
            showAdditionalInfo($record["productDescription"], $record["productImage"], $record["productName"], $record["price"], $i);
            echo "</h4></td>";
            echo "<td><h4>$" . $record["price"]. "</h4></td>";
        
            echo "<form method='post'>";
            echo "<input type='hidden' name='productName' value='".$record["productName"]. "'>";
            echo "<input type='hidden' name='productId' value='".$record["productId"]. "'>";
            echo "<input type='hidden' name='productImage' value='".$record["productImage"]. "'>";
            echo "<input type='hidden' name='productPrice' value='".$record["price"]. "'>";
        
            
            echo "</form>";
            
            echo "</tr>";
            
            $i++;
        }
        
        echo "</table>";
        }
        
}
function showAdditionalInfo ($desc, $img, $name, $price, $num) {
        echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter$num'>";
      echo "Additional Product Info";
    echo "</button>";
    
    echo "<div class='modal fade' id='exampleModalCenter$num' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>";
      echo "<div class='modal-dialog modal-dialog-centered' role='document'>";
        echo "<div class='modal-content'>";
          echo "<div class='modal-header'>";
            echo "<h5 class='modal-title' id='exampleModalCenterTitle'>Full Product Info</h5>";
            echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
              echo "<span aria-hidden='true'>&times;</span>";
            echo "</button>";
          echo "</div>";
          echo "<div class='modal-body'>";
            echo "<img src = '$img' height='300px' width='500px'>";
            echo "<br />";
            echo $name;
            echo "<br />";
            echo $desc;
            echo "<br />";
            echo "$$price";
          echo "</div>";
          echo "<div class='modal-footer'>";
            echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    echo "</div>";
}

?>