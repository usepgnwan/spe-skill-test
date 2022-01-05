<?php
$input1 = readline('Masukan Inputan deret angka yang dipisahkan oleh spasi: ');
$toArray = explode(' ', $input1);
$count = count($toArray);


if ($count < 3) {
    echo "Deret Angka Minimal 3";
} else {
    $ganjil = [];
    $genap = [];
    foreach ($toArray as $list) {
        if ($list % 2 != 0) {
            array_push($ganjil, $list);
        } else if ($list % 2 == 0) {
            array_push($genap, $list);
        }
    }

    if (count($ganjil) != 0) {
        echo implode(' ', $ganjil) . ' (the only odd number)' . PHP_EOL;
    }
    if (count($genap) != 0) {
        echo implode(' ', $genap) . ' (the only even number)' . PHP_EOL;
    }

    if (count($ganjil) == $count) {
        echo false . ' (all odd integer, no outlier)';
    }
}
