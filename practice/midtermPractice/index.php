<?php
    include 'inc/functions.php';

?>
    
<!DOCTYPE html>
<html>
    <head>
        <title> Winter Vaction Planner! </title>
    </head>
    <style>
        @import url("css/styles.css");
        body {
            text-align: center;
        }
    </style>
    <body>
        <div id="main">
            
        </div>
        <form method="GET">
            Select Month:
            <select>
              <option value="nov">November</option>
              <option value="dec">December</option>
              <option value="jan">January</option>
              <option value="feb">February</option>
            </select>
            <br>
            Number of locations:
            <input type="radio" name="locationNumber" value="three"> Three
            <input type="radio" name="locationNumber" value="four"> Four
            <input type="radio" name="locationNumber" value="five"> Five
            <br>
            Select Country: 
             <select>
              <option value="usa">USA</option>
              <option value="mex">Mexico</option>
              <option value="fra">France</option>
            </select>
            <br>
            Visit locations in alphabetical order:
            <input type="radio" name="alphaOrder" value="AZ"> A-Z
            <input type="radio" name="alphaOrder" value="ZA"> Z-A
            <br>
            <button type="button">Create Itinerary!</button>
            <br>
        </form>
        
        <?php
            createTable();
        ?>
        
    </body>
</html>
