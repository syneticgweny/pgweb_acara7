<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = "123";   // String
$b = "3.1415"; // String
$c = 42;      // Integer
$d = false;   // Boolean
$e = [1, 2, 3]; // Array

$a = (int) $a;
$b = (float) $b;
$c = (float) $c;
$d = (int) $d;
$e = (string) $e; // Arrays cannot be cast directly, this will generate a notice

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>Note that when casting a Boolean `false` into integer, it gets the value "0", and arrays cannot be directly cast into strings.</p>

</body>
</html>
