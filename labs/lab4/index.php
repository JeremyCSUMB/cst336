<?php

$backgroundImage = "img/sea.jpg";

if (isset($_GET["keyword"])) {
    include "api/pixabayAPI.php";
    $keyword = $_GET["keyword"];
    if (!empty($_GET['category'])) { //user selected a category
        $keyword = $_GET['category'];
    }
    echo "You searched for:  $keyword";
   $imageURLs = getImageURLs($keyword, $_GET["layout"]);
   shuffle($imageURLs);
   $backgroundImage = $imageURLs[array_rand($imageURLs)];
    
}
function formIsValid() {
    
    if (empty($_GET['keyword']) && empty($_GET['category'])) {
        echo "<h1> ERROR! You must type a keyword or select a category</h1>";
        return false;
    }
    return true;
            
}

// print_r($imageURLs);
?>





<!DOCTYPE html>
<html>
    <head>
        <title> Lab 4: Pixabay Slideshow </title>
        
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <style>
            
            body {
                background-image: url(<?=$backgroundImage?>);
                background-size: cover;
            }
            #carouselExampleIndicators{
                width:500px;
                margin:0 auto;
            }
        </style>
    </head>
    <body>
        
        <form method="GET">
            <input type="text" name="keyword" size="15" placeholder="Keyword"/>
            <br>
            <input type="radio" name="layout" value="horizontal"> Horizontal
            <input type="radio" name="layout" value="vertical"> Vertical
            <br>
            <select name="category">
                <option value="">Selection</option>
                <option value="ocean">Sea</option>
                <option value="mountains">Mountains</option>
                <option value="forest">Forest</option>
                <option value="sky">Sky</option>
            </select>
            <br>
            <input type="submit" name="submitBtn" value="Submit!"/>
            <br>

        </form>
        <h1>You must type a keyword or select a category</h1>
        <?php
        if (isset($imageURLs) && formIsValid()) { ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?=$imageURLs[0]?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=$imageURLs[1]?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=$imageURLs[2]?>" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=$imageURLs[3]?>" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=$imageURLs[4]?>" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=$imageURLs[5]?>" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=$imageURLs[6]?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <?php
        } else {
            echo "<h1> Please input some information and hit enter!<h1><br />";
        }
        ?>
        
        <footer>
            <hr>
            CST 336: Internet Programming &copy; 2018 Jeremy Shaw <br />
            <strong>Disclaimer:</strong> The information in this website is fake.
            <br />
            It is for educational purposes only.
            <br />
            
            <img src="../../img/otter.jpg" alt="CSUMB logo">
            <br />
            <img src="../../img/buddyprogram.png" alt="Buddy Program">
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>