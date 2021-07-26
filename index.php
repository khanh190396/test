<?php

$rawData = getRawData();
$result = getData($rawData);
print_r($rawData);
print_r('<br>');
print_r(getData($rawData));

function getRawData() {
    $range = range(1, 9);
    $result = [];

    for ($i = 0; $i < 5; $i++) {
        $newArr = $range;
        shuffle($newArr);
        $result[] = implode('.', array_slice($newArr, 0, 3));
    }

    return($result);
}

function getData($rawArr) {
    $result = [];
    foreach ($rawArr as $value) {
        if ($value[0] % 2 == 0) {
            $result[] = $value;
        }
    }
    return $result;
}
