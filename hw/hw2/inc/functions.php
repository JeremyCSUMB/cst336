<?php


function choosePokemon($gen) {
    $rand_key = array_rand($gen, 1);
    return $rand_key;
}

function getPokemonType($rand_key) {
    switch($rand_key) {
        case 0:
            $color = "grass";
            break;
        case 1:
            $color = "fire";
            break;
        case 2:
            $color = "water";
            break;
    }
    return $color;
}

function getPokemonGeneration() {
    $selected_val = "";
    if(isset($_POST['submit'])){
        $selected_val = $_POST['generation'];
    }
    return $selected_val;
}

function getPokemon() {
    $gen = arrayOfPokemon(getPokemonGeneration());
    $num = choosePokemon($gen);
    $pokemon = $gen[$num];
    $color = getPokemonType($num);
    generateImage($pokemon, $color);
    randFact();
}


function arrayOfPokemon($generation) {
    $generation0 = array("pikachu");
    $generation1 = array("bulbasaur", "charmander", "squirtle");
    $generation2 = array("chikorita", "cyndaquil", "totodile");
    $generation3 = array("treecko", "torchic", "mudkip");
    switch($generation) {
        case 1:
            return $generation1;
        case 2:
            return $generation2;
        case 3:
            return $generation3;
        default:
            return $generation0;
    }
}

function generateImage($pokemon, $color) {
    echo "<div id='".$color."'>";
    echo "<img id='pokemon' src='img/$pokemon.jpg' alt ='$pokemon' title='".ucfirst($pokemon)."'/><br />";
    echo "<br /> <br /> <br/> <br />All right! I choose you ".ucfirst($pokemon)."! </br>";
    echo "</div>";
}


function randFact() {
    $fact = array();
    array_push($fact, "Fact: Pokemon has grossed more than Star Wars!");
    array_push($fact, "Fact: The odds of encountering a shiny Pokemon is 1/8192!");
    array_push($fact, "Fact: There are currently 7 generations of pokemon!");
    array_push($fact, "Fact: Pokemon have hidden stats known as IVs!");
    array_push($fact, "Fact: Ditto can breed with just about any non-legendary Pokemon!");
    array_push($fact, "Fact: Ash from the Pokemon anime has not aged!");
    array_push($fact, "Fact: There is a glitch Pokemon in Gen 1 called missingno.");
    array_push($fact, "Fact: Mew can only be officially obtained through Pokemon events!");
    array_push($fact, "Fact: There were 151 Pokemon in Gen 1!");
    array_push($fact, "Fact: There is a famous challege known as the Nuzlocke! Check it out!");
    $last = -1;
    for ($i; $i < 3; ++$i) {
        do {
            $random = rand(0,9);
        } while ($random == $last);
        $string = $fact[$random];
        unset($fact[$random]);
        $fact = array_values($fact);
        echo "<br /> $string";
        $last = $random;
    }
    echo "<br />";
}

?>