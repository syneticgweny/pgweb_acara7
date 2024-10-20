<!DOCTYPE html>
<html>

<body>

    <?php
    $cars = array("Celana", "Kemeja", "Jaket",  "Baju", "Tas");
    $colors = array("red", "green", "blue", "cyan", "magenta");

    echo "<table border='1'>";
    for ($i = 0; $i <= 4; $i++) {
        echo "<tr><td> $cars[$i] </td><td> $colors[$i] </td></tr>";
    }
    echo "</table>";
    ?>

</body>

</html>