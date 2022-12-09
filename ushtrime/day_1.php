<?php


function doublechar2($string, $times)
{
    $spString = str_split($string);
    

    $filtred = [];
    for ($i = 0; $i < count($spString); $i++) {
        if (array_key_exists($spString[$i], $filtred)) {
            $filtred[$spString[$i]]++;
        } else {
            $filtred += [$spString[$i] => 1];
        }
    }

    return array_filter($filtred, fn ($value) => $value == $times);
    // return $filtred;
}


print_r(doublechar2("flossskk", 2));