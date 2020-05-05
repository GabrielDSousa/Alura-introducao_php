<?php

$height = 1.80;
$weight = 85;
$bmi = $weight/($height ** 2);

echo "You're with ";

if ($bmi < 18.5){
    echo "slightness";
}elseif ($bmi < 24.9){
    echo "regular weight";
}elseif ($bmi < 29.9){
    echo "overweight";
}elseif ($bmi < 39.9){
    echo "obesity";
}else {
    echo "severe obesity";
}
