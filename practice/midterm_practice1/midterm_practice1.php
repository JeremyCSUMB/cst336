<?php
    session_start();
    include "functions.php";

    
//Feb-28, Nov-30, Dec and Jan: 31
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Winter Vacation Planner</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style type="text/css">
            body {
                text-align: center;
            }
            
            td {
                border: 1px solid black;
                width:100px;
                height:100px;
            }
            img {
                width: 50%;
                height: 50%;
            }
        </style>
    </head>
    <body>
        <h1>Winter Vacation Planner</h1>
        <div>
            <form method="GET">
                <select name="month"> Select month: 
                    <option value="">Selection</option>
                    <option value="nov">November</option>
                    <option value="dec">December</option>
                    <option value="jan">January</option>
                    <option value="feb">February</option>
                </select>
                <br> Number of locations:
                <input type="radio" name="amount" value=3> Three
                <input type="radio" name="amount" value=4> Four
                <input type="radio" name="amount" value=5> Five
                <br>
                <select name="country"> Select Country:
                    <option value="usa">USA</option>
                    <option value="mex">Mexico</option>
                    <option value="fra">France</option>
                </select>
                <br> View Locations in Alphabetical Order: 
                <input type="radio" name="alpha" value="az"> A-Z
                <input type="radio" name="alpha" value="za"> Z-A
                <br>
                <input type="submit" name="submitBtn" value="Create Itinerary"/>
                <br>
            </form>
        </div>
        <div>
            <?php
                getData();
            ?>
        </div>
    </body>
</html>

