<!DOCTYPE html>
<html>

<body>

    <?php
    function familyDetails($fname, $year, $city)
    {
        echo "$fname was born in $year and lives in $city.<br>";
    }

    familyDetails("Alex", "1990", "New York");
    familyDetails("Maria", "1985", "Los Angeles");
    familyDetails("John", "2000", "Chicago");
    ?>

</body>

</html>