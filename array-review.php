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