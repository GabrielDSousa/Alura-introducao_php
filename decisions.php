<?php

$age = 18;
$photoId = true;

echo "You can only enter if you are over eighteen and with a photo ID.".PHP_EOL;


//if($age == 18 || $idade > 18)
//if($age == 18 or $idade > 18)
//if($age >= 18 && $photoId)
if($age >= 18 and $photoId){
    echo "You have $age years and id, you can enter";
}elseif($age >= 18 and !$photoId){
    echo "You don't have id, you can't enter";
}else{
    echo "You have $age years, so you can't enter";
}
