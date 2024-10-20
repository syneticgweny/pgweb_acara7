<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  // integer
$y = "100"; // string

// Perbandingan nilai dan tipe data
var_dump($x === $y); // returns false karena tipe data berbeda

// Perbandingan nilai saja
var_dump($x == $y);  // returns true karena nilai sama

// Perbandingan tidak sama dengan (nilai atau tipe data)
var_dump($x != $y);  // returns false karena nilai sama

// Perbandingan tidak identik (nilai dan tipe data)
var_dump($x !== $y); // returns true karena tipe data berbeda

// Perbandingan lebih besar
var_dump($x > $y);   // returns false karena nilai sama

// Perbandingan lebih kecil atau sama dengan
var_dump($x <= $y);  // returns true karena nilai sama
?>  

</body>
</html>