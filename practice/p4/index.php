<?php


// echo "<li style=\"display: inline;\"><img= src=\">"
    if(isset($_POST['submit'])){
    // As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
    foreach ($_POST['suit'] as $select)
    {
        echo "You have selected :" .$select; // Displaying Selected Value
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Aces vs Kings</title>
          <style>
          	/*#wrapper, #footer{*/
          	/*  width:800px;*/
          	/*  margin:0 auto;	*/
          	/*}*/
          	footer{
          	   text-align:center;
          	   font-size:10px;
          	}
          </style>
    </head>
    <body>
       
        <div id="wrapper">
             <header>
                <h1>Aces vs Kings</h1>
            </header>
            <div id="game">
                
            </div>
            <form action="/action_page.php">
              Number of Rows:
              <input type="text" name="firstname" value="5">
              <br>
              <br>
              Number of columns:
              <input type="text" name="lastname" value="5">
              <br><br>
              Suit to Omit:
              <form>
                  <select name= "cards">
                  <option value="Hearts">Hearts</option>
                  <option value="Diamonds">Diamonds</option>
                  <option value="Cloves">Cloves</option>
                  <option value="Spades">Spades</option>
                </select>
              <input type="submit" value="Submit" value= "Get Selected Values" />
              if (isset($_POST['submit'])){
                  $s_value= $_POST['selected'];
                  echo "You selected: " .$s_value;
              }
            </form> 
        </div>
    </body>
</html>