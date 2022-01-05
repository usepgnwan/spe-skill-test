<?php
$haystack = readline('Masukan Inputan as a haystack yang dipisahkan oleh spasi: ');
$jarum = readline('Masukan Inputan as the needle seperti "blue": ');
$toArray = explode(' ', $haystack);
function findNeedle(array $haystack, $jarum)
{
    $check =  array_map(function ($j) use ($jarum) {
        if ($j == $jarum) {
            return $j;
        }
    }, $haystack);
    return implode('', $check);
}
print(findNeedle($toArray, $jarum));
