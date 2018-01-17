<?php
//PART I
echo '<h3>Part I</h3>';
$animals= array('panda','alpaca', 'boa');

//sort and print array values
function printArray($animals) {
    //sort array
    sort($animals);
    //print array values
    foreach ($animals as $animal) {
        echo $animal.' ';
    }
}

//add elements into the array
function addToArray($animals, $str) {
    echo "adding $str...<br>";
    if(!in_array(strtolower($str), $animals)) {
        array_push($animals, $str);
    }
    return $animals;
}

//Test functions
printArray($animals); echo '<br>';
$animals = addToArray($animals, 'goat');
printArray($animals);
echo '<br>';
$animals = addToArray($animals, 'Boa');
printArray($animals);

//PART II
echo '<h3>Part II</h3>';

//cupcake flavors
$flavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut","caramel"=>"Salted Caramel Cupcake","velvet"=>"Red Velvet",
    "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

foreach($flavors as $key => $val) {
    echo "<input type='checkbox' name='flavors[]' value='$key'> $val<br>";
}