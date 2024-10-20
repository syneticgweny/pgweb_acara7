<!DOCTYPE html>
<html>

<body>

    <?php
    $suhu = 28;

    if ($suhu < 0) {
        echo "Suhu sangat dingin, berhati-hatilah!";
    } elseif ($suhu >= 0 && $suhu < 10) {
        echo "Suhu dingin, pakailah jaket tebal.";
    } elseif ($suhu >= 10 && $suhu < 20) {
        echo "Suhu sejuk, sweater mungkin diperlukan.";
    } elseif ($suhu >= 20 && $suhu < 30) {
        echo "Suhu nyaman, cuaca yang bagus!";
    } elseif ($suhu >= 30 && $suhu < 40) {
        echo "Suhu panas, minumlah banyak air.";
    } else {
        echo "Suhu sangat panas, tetaplah di dalam ruangan ber-AC!";
    }
    ?>

</body>

</html>