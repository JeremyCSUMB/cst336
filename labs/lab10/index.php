<!DOCTYPE html>
<html>
    <head>
        <title> CSUMB: Pet Shelter </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            body {
                text-align: center;
            }
        </style>
   
    </head>
    <body>
        
	  <?php 
	    include 'inc/header.php';
	    
	  ?>
       

        <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">-->
          <!-- Indicators -->
        <!--  <ol class="carousel-indicators">-->
        <!--    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="1"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="2"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="3"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="4"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="5"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="6"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="7"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="8"></li>-->
        <!--    <li data-target="#myCarousel" data-slide-to="9"></li>-->
        <!--  </ol>-->
        
          <!-- Wrapper for slides -->
        <!--  <div class="carousel-inner">-->
        <!--    <div class="item active">-->
        <!--      <img src="img/alex.jpg" alt="alex">-->
        <!--    </div>-->
        
        <!--    <div class="item">-->
        <!--      <img src="img/bear.jpg" alt="bear">-->
        <!--    </div>-->
        
        <!--    <div class="item">-->
        <!--      <img src="img/carl.jpg" alt="carl">-->
        <!--    </div>-->
            
        <!--    <div class="item">-->
        <!--      <img src="img/charlie.jpg" alt="alex">-->
        <!--    </div>-->
        
        <!--    <div class="item">-->
        <!--      <img src="img/lion.jpg" alt="bear">-->
        <!--    </div>-->
        
        <!--    <div class="item">-->
        <!--      <img src="img/otter.jpg" alt="carl">-->
        <!--    </div>-->
        <!--    <div class="item">-->
        <!--      <img src="img/sally.jpg" alt="alex">-->
        <!--    </div>-->
        
        <!--    <div class="item">-->
        <!--      <img src="img/samantha.jpg" alt="bear">-->
        <!--    </div>-->
        
        <!--    <div class="item">-->
        <!--      <img src="img/ted.jpg" alt="carl">-->
        <!--    </div>-->
        <!--    <div class="item">-->
        <!--      <img src="img/tiger.jpg" alt="carl">-->
        <!--    </div>-->
            
        <!--  </div>-->
        
          <!-- Left and right controls -->
        <!--  <a class="left carousel-control" href="#myCarousel" data-slide="prev">-->
        <!--    <span class="glyphicon glyphicon-chevron-left"></span>-->
        <!--    <span class="sr-only">Previous</span>-->
        <!--  </a>-->
        <!--  <a class="right carousel-control" href="#myCarousel" data-slide="next">-->
        <!--    <span class="glyphicon glyphicon-chevron-right"></span>-->
        <!--    <span class="sr-only">Next</span>-->
        <!--  </a>-->
        <!--</div>-->
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/alex.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/bear.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carl.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/charlie.jpg" alt="Forth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/lion.jpg" alt="Fifth slide">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="img/otter.jpg" alt="Sixth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/sally.jpg" alt="Seventh slide">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="img/samantha.jpg" alt="Eigth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/ted.jpg" alt="Ninth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/tiger.jpg" alt="Tenth slide">
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


        <a class="btn btn-outline-success" href="pets.php" role="button">Adopt Now</a>
        <br><br><br>
        <?php
        include 'inc/footer.php';
        
        ?>
        </body>

</html>