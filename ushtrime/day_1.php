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


// print_r(doublechar2("flossskk", 2));

function challange2($arr, $y, $z)
{
    $newarr = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $z && count($newarr) < $y) {
            $newarr[] =$arr[$i];
        }
    }
    return $newarr;
}

print_r(challange2([12, 1, 405, 390, 1093,401,402,403,40, 1000], 4, 400));

// $newarr = [1,2];
// print_r($newarr);