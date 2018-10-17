<?php
session_start();
$_SESSION["history"] = array();
if(isset($_GET["amount"])) {
    $amount = $_GET["amount"];
    if (intval($amount) > 8) {
        echo "<h1>ERROR: Password must be of length 8 or less!</h1>";
    }
}

function generatePassword($amount, $length, $digits) {
    $letters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","X","Y","Z");
    $digits = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $passwords = array();
    for ($i=0; $i<$amount; $i++) {
    $pass = "";
        for ($j=0; $j <$length; $j++) {
            if ($j > $length-4 && isset($_GET["digits"])) {
                $pass .= $digits[array_rand($digits)];
            }
            else {
                $pass .= $letters[array_rand($letters)];
        
            }
        }
    $passwords[] = $pass;
    }
    sort($passwords);
    #$_SESSION["history"] = array_merge($_SESSION["history"], $passwords);
    $_SESSION["history"] = $passwords;
    echo "Generating passwords with characters";
    sort($_SESSION['history']);
    for ($i = 0; $i < count($passwords); $i++) {
        echo "<h5> ".$passwords[$i]." </h5>";
    }
    print_r($_SESSION["history"]);
}

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Custom Password Generator</title>
    </head>
    <body>
        <form method="GET">
            How many passwords?
          <input type="text" name="amount" value="0" size="2">
          (No more than 8)
          <br>
          <b>Password length</b>
          <input type="radio" name="characters" value= 6> 6 Characters
            <input type="radio" name="characters" value= 8> 8 Characters
            <input type="radio" name="characters" value= 10> 10 Characters
          <br><br>
        <label class="container">Include digits (up to 3 digits will be part of the password)
          <input type="checkbox" name="digits" value="1">
          <span class="checkmark"></span>
        </label>
        <br>
          <input type="submit" value="Create Passwords!">
          <br><br>
          <br><br>
          </form>
         <form action="history.php">
          <input type="submit" value="Display Password History">
        </form> 
        <?php
            generatePassword($_GET["amount"], $_GET["characters"], $_GET["digits"]);
        ?>
    </body>
</html>