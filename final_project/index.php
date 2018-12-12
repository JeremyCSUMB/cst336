<?php
session_start();
include 'inc/dbConnection.php';
include "inc/functions.php";
$dbConn = startConnection("ottercars");

function displayBrand() { 
    global $dbConn;
    
    $sql = "SELECT * FROM oc_brand ORDER BY brandName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($records as $record) {
        echo "<option value='".$record['brandId']."'>" . $record['brandName'] . "</option>";
    }
}

function displayColor() { 
    global $dbConn;
    
    $sql = "SELECT * FROM oc_color ORDER BY carColor";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($records as $record) {
        echo "<option value='".$record['colorId']."'>" . $record['carColor'] . "</option>";
    }
}

function displayType() { 
    global $dbConn;
    
    $sql = "SELECT * FROM oc_type ORDER BY vehicleType";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($records as $record) {
        echo "<option value='".$record['typeId']."'>" . $record['vehicleType'] . "</option>";
    }
}



?>




<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Otter Car Company</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Otter Cars</h1>
        <div id="searchBar">
            
            <form method="GET">
                
            Product: <input type="text" name="productName" placeholder="Product keyword" value = "<?php if (isset($_GET["productName"]) && !empty($_GET["productName"])) { echo $_GET["productName"];}  ?>"/>
                Car Brand:
                <select name="brand">
                       <option value=""> Select one </option>  
                       <?=displayBrand()?>
                </select>
             
                Color:
                <select name="color">
                       <option value=""> Select one </option>  
                       <?=displayColor()?>
                </select>
             
                Type:
                <select name="type">
                       <option value=""> Select one </option>  
                       <?=displayType()?>
                </select>
               
                Select Order:
                <input type = "radio" name = "order" value = "ASC" > A-Z </input>
                <input type = "radio" name = "order" value = "DESC"> Z-A </input>
            
    
                <input type="submit" name="searchForm" value="Search"/>
            </form>
        </div>
        
        
        <?= displayResults() ?>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <br><brt>
        <form action="loginScreen.php">
            <input type="submit" value="Admin Page" />
        </form>
        <footer>
            <hr>
            CST 336: Internet Programming &copy; 2018 Jeremy Shaw <br />
            <strong>Disclaimer:</strong> The information in this website is fake.
            <br />
            It is for educational purposes only.
            <br />
            
            <img src="../img/otter.jpg" alt="CSUMB logo">
        </footer>
    </body>
</html>