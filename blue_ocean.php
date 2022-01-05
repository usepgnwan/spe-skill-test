<?php
$input1 =  readline('Masukan Inputan  yang dipisahkan oleh spasi: ');
$unset = readline('Masukan Inputan  seperti "blue": ');
$toArray = explode(' ', $input1);
function findNeedle($array1, $unset)
{
    $check =  array_map(function ($arr) use ($unset) {
        if ($arr == $unset) {
            unset($arr);
        }
    }, $array1);
    return $check;
}
var_dump(findNeedle($toArray, $unset));
