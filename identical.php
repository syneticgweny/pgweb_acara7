<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;        // integer
$y = "100";      // string
$z = 100.0;      // float
$w = true;       // boolean

// Perbandingan nilai (tanpa memperhatikan tipe data)
var_dump($x == $y);  // returns true karena nilai sama

// Perbandingan nilai dan tipe data
var_dump($x === $z); // returns false karena tipe data berbeda (integer vs float)

// Perbandingan nilai dengan konversi tipe
var_dump($x == $w);  // returns true karena true dikonversi ke 1, dan 1 == 100 adalah true dalam PHP

// Perbandingan string dengan number menggunakan operator <>
var_dump($x <> $y);  // returns false karena nilai sama (meskipun tipe berbeda)

// Perbandingan menggunakan operator spaceship (<=>)
var_dump($x <=> $z); // returns 0 karena nilai sama (meskipun tipe berbeda)

// Perbandingan string secara leksikal
$a = "apple";
$b = "banana";
var_dump($a < $b);   // returns true karena "apple" lebih awal dalam urutan alfabet
?>  

</body>
</html>