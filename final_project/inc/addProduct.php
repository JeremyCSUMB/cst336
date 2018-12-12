<?php
session_start();

include 'dbConnection.php';
$dbConn = startConnection("ottercars");
include 'functions.php';
validateSession();

if (isset($_GET['addProduct'])) { //checks whether the form was submitted
    
    $productName = $_GET['productName'];
    $description =  $_GET['description'];
    $price =  $_GET['price'];
    $catId =  $_GET['catId'];
    $image = $_GET['productImage'];
    $typeId = $_GET["typeId"];
    $colorId = $_GET["colorId"];
    
    $sql = "INSERT INTO oc_autos (productName, productDescription, productImage,price, brandId, typeId, colorId) 
            VALUES (:productName, :productDescription, :productImage, :price, :catId, :typeId, :colorId);";
    $np = array();
    $np[":productName"] = $productName;
    $np[":productDescription"] = $description;
    $np[":productImage"] = $image;
    $np[":price"] = $price;
    $np[":catId"] = $catId;
    $np[":typeId"] = $typeId;
    $np[":colorId"] = $colorId;
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    echo "New Product was added!";
    
}

?>
<!DOCTYPE html>
<html>
    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title> Admin Section: Add New Product </title>
        <link rel='stylesheet' href='../css/styles.css' type='text/css' />
    </head>
    <body>
        
        <h1> Adding New Product </h1>
        
        <form>
           Product name: <input type="text" name="productName"><br>
           <br>
           Description: <textarea name="description" cols="50" rows="4"></textarea><br>
           <br>
           Price: <input type="text" name="price"><br>
           <br>
           Category: 
           <select name="catId">
              <option value="">Select One</option>
              <?php
              
              $categories = getCategories();
              
              foreach ($categories as $category) {
                  
                  echo "<option value='".$category['brandId']."'>" . $category['brandName'] . "</option>";
                  
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
           Set Image Url: <input type="text" name="productImage"><br>
           <br>
           <input type="submit" name="addProduct" value="Add Product">
        </form>
        <br>
  
        <form action="admin.php">
            <input type="submit" name="done" value="Done">
        </form>

    </body>
</html>