<?php

/*
$counter = 1;
while($counter <= 15){
    echo "$counter".PHP_EOL;
    $counter = $counter + 1;
}*/


for($i=1; $i<16; $i++){
    if($i ==13){
        continue;
    }

    echo $i.PHP_EOL;
}

echo PHP_EOL;

for($i=1; $i<16; $i++){
    if($i ==3){
        break;
    }

    echo $i.PHP_EOL;
}