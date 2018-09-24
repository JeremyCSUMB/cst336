<?php
    include "inc/functions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Random Pokemon Starter Generator</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Press+Start+2P');
            @import url('css/styles.css');
        </style>
    </head>
    <body>
        <img src="img/pokemon-logo.jpg" alt="pokemon-logo"/>
        <h2>Let's choose a starter!</h2>
        <br />
        <?php
            getPokemon();
        ?>
        <div id="selection">
            <form action="#" method="post">
                <select name="generation">
                  <option value="1">Generation 1</option>
                  <option value="2">Generation 2</option>
                  <option value="3">Generation 3</option>
                </select>
                <input type="submit" name="submit" value="Go!"/>
            </form>
        </div>
        </br>
        <div>
            <a href='https://www.reddit.com/r/pokemon/'>Pokemon subreddit</a><br/><br/>
            <a href='https://www.pokemon.com/us/pokemon-episodes/'>Watch Pokemon Online!</a>
        </div>
        
        <footer>
            <hr>
            CST 336: Internet Programming &copy; 2018 Jeremy Shaw <br />
            <strong>Disclaimer:</strong> The information in this website is fake. I do not own Pokemon or the any of the associated images.
            <br />
            It is for educational purposes only.
            <br />
            
            <img src="../../img/otter.jpg" alt="CSUMB logo">
            <br />
            <img src="../../img/buddyprogram.png" alt="Buddy Program">
        </footer>
        
    </body>
</html>