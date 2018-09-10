<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        <?php 
            
            
            
            
            function displaySymbol($random_value) {
                //$random_value = rand(0, 2); //Generates a random value from 0 to 2 
            
                //echo $random_value;
                
                // if ($random_value == 0) {
                //     $symbol = "seven";
                // } else if ($random_value == 1) {
                //     $symbol = "orange";
                // } else {
                //     $symbol = "cherry";
                // }
                
                switch ($random_value) {
                    case 0: $symbol = "seven";
                            break;
                    case 1: $symbol ="orange";
                            break;
                    case 2: $symbol = "cherry";
                            break;
                }
                //$symbol = "seven";
            
                //echo ucfirst($symbol);
            
                echo "<img src='img/$symbol.png' alt='$symbol' title='".ucfirst($symbol)."'/>";
            }
           
            $random_value1 = rand(0,2);
            displaySymbol($random_value1);
            $random_value2 = rand(0,2);
            displaySymbol($random_value2);
            $random_value3 = rand(0,2);
            displaySymbol($random_value3);
            
            if ($random_value1 == $random_value2 && $random_value2 == $random_value3) {
                echo "<br> Jackpot my dude! <br>";
            }
        ?>


        


        
    </body>
</html>