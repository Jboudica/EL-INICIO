<?php
///Listando Animales
function mergeSort($array)
{
    if (count($array) <= 1) {
        return $array;
    }
    $mid = count($array) / 2;
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);
    $left = mergeSort($left);
    $right = mergeSort($right);
    return merge($left, $right);
}
function merge($left, $right)
{
    $result = [];
    $leftIndex = 0;
    $rightIndex = 0;
    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        if ($left[$leftIndex] < $right[$rightIndex]) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        } else {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }
    }
    while ($leftIndex < count($left)) {
        $result[] = $left[$leftIndex];
        $leftIndex++;
    }
    while ($rightIndex < count($right)) {
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }
    return $result;
}
//Ejecucion
$animals = array("dog", "cat", "elephant", "lion", "tiger", "horse");
$sortedAnimals = mergeSort($animals);
print_r($sortedAnimals);
?>