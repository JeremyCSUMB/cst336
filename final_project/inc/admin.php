<?php
session_start();



include 'dbConnection.php';
include 'functions.php';
$dbConn = startConnection("ottercars");


validateSession();

?>

<!DOCTYPE html>
<html>
   

    <head>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title> Admin Main Page </title>
        <style>
            form {
                display: inline-block;
            }
        </style>
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />-->
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <script>
        
            function confirmDelete() {
                
                //alert();
                //prompt();
                return confirm("Really??");
                
            }
            function getAverage() {
                $.ajax({
                    type: "GET",
                    url: "generateAvg.php",
                    success: function(msg) {
                        alert( "Average Price: $" + msg);
                    },
	            });
            }
            function getMin() {
                $.ajax({
                    type: "GET",
                    url: "generateMin.php",
                    success: function(msg) {
                        alert( "Min Price: $" + msg);
                    },
	            });
            }
            function getMax() {
                $.ajax({
                    type: "GET",
                    url: "generateMax.php",
                    success: function(msg) {
                        alert( "Max Price: $" + msg);
                    },
	            });
            }
            
            //$(document).ready(getAverage);
        
        </script>
    
    </head>
    <body>
        
        <h1> ADMIN SECTION - OTTERCARS </h1>
        
         <h3>Welcome <?= $_SESSION['adminFullName'] ?> </h3>

          <form action="addProduct.php">
              <input type="submit" value="Add New Product">
          </form>
         <form action="logout.php">
              <input type="submit" value="Logout">
          </form>
          <br>
          Generate Reports:
          <br>
          <button onClick='getAverage();'>Average Price</button>
          <button onClick='getMin();'>Minimum Price</button>
          <button onClick='getMax();'>Max Price</button>
           <br><br>
        
        <?= displayAllProducts() ?>
        

        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
    </body>
</html>