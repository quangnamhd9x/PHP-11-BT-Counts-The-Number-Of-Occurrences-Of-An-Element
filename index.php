<?php
function findCount($numbers, $value){
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++){
        if ($numbers[$i] == $value){
            $count++;
        }
    }
    return $count;
}

$arrayNumbers = [];
for ($i = 0; $i < 100; ++$i){
    $arrayNumbers[$i] = rand(1, 100);
}
foreach ($arrayNumbers as $num){
    echo $num . " ";
}

$newValue = findCount($arrayNumbers, 23);
echo '<br>';
echo '*** Count: ' . 23 . ' = ' . $newValue;