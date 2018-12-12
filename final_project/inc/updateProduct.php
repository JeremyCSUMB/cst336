<?php
session_start();

include 'dbConnection.php';
$dbConn = startConnection("ottercars");
include 'functions.php';
validateSession();

if (isset($_GET['productId'])) {
  $productInfo = getProductInfo($_GET['productId']);
 // print_r($productInfo);
}

function updateItems() {
    global $dbConn;
    
    if (isset($_GET['updateProduct'])){  //user has submitted update form
        $productName = $_GET['productName'];
        $description = $_GET['description'];
        $price =  $_GET['price'];
        $brandId =  $_GET['brandId'];
        $image = $_GET['productImage'];
        $typeId = $_GET["typeId"];
        $colorId = $_GET["colorId"];
        $sql = "UPDATE oc_autos
                SET productName= :productName,
                   productDescription = :productDescription,
                   price = :price,
                   brandId = :brandId,
                   productImage = :productImage,
                   typeId = :typeId,
                   colorId = :colorId
                WHERE productId = " . $_GET['productId'];
             
        $np = array();
        $np[":productName"] = $productName;
        $np[":productDescription"] = $description;
        $np[":price"] = $price;
        $np[":brandId"] = $brandId;
        $np[":productImage"] = $image;
        $np[":typeId"] = $typeId;
        $np["colorId"] = $colorId;
        $stmt = $dbConn->prepare($sql);
        $stmt->execute($np);
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Update Products! </title>
        <link rel='stylesheet' href='../css/styles.css' type='text/css' />
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <h1> Updating a Product </h1>
        <form>
            <input type="hidden" name="productId" value="<?=$productInfo['productId']?>">
           Product name: <input type="text" name="productName" value="<?=$productInfo['productName']?>"><br>
           <br>
           Description: <textarea name="description" cols="50" rows="4"> <?=$productInfo['productDescription']?> </textarea><br>
           <br>
           Price: <input type="text" name="price" value="<?=$productInfo['price']?>"><br>
           <br>
           Brand: 
           <select name="brandId">
              <option value="">Select One</option>
              <?php
              
              $categories = getCategories();
              
              foreach ($categories as $category) {
                  
                  echo "<option  "; 
                  echo  ($category['brandId']==$productInfo['brandId'])?"selected":"";
                  echo " value='".$category['brandId']."'>" . $category['brandName'] . "</option>";
                  
              }
              
              ?>
           </select>
           <br>
           <br>
           Type:
           <select name="typeId">
              <option value="">Select One</option>
              <?php
              
              $categories = getCategories("oc_type", "vehicleType");
              
              foreach ($categories as $category) {
                  
                  echo "<option  "; 
                  echo  ($category['typeId']==$productInfo['typeId'])?"selected":"";
                  echo " value='".$category['typeId']."'>" . $category['vehicleType'] . "</option>";
                  
              }
              
              ?>
           </select>
           <br>
           <br>
           Color:
           <select name="colorId">
              <option value="">Select One</option>
              <?php
              
              $categories = getCategories("oc_color", "carColor");
              
              foreach ($categories as $category) {
                  
                  echo "<option  "; 
                  echo  ($category['colorId']==$productInfo['colorId'])?"selected":"";
                  echo " value='".$category['colorId']."'>" . $category['carColor'] . "</option>";
                  
              }
              
              ?>
           </select>
           <br />
           <br>
           Set Image Url: <input type="text" name="productImage" value="<?=$productInfo['productImage']?>"><br>
           <br>
           
           <input type="submit" name="updateProduct" value="Update Product">
        </form>
        <?=updateItems() ?>
        <br>
        <form action="admin.php">
            <input type="submit" name="done" value="Done">
        </form>
        
        
    </body>
</html>