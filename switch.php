<!DOCTYPE html>
<html>

<body>

    <?php
    $cuaca = "hujan"; // Bisa diubah menjadi: cerah, berawan, hujan, atau badai

    switch ($cuaca) {
        case "cerah":
            echo "Cuaca cerah! Ini waktu yang tepat untuk piknik atau berjalan-jalan di taman.";
            break;
        case "berawan":
            echo "Cuaca berawan. Mungkin cocok untuk jogging atau bersepeda.";
            break;
        case "hujan":
            echo "Sedang hujan. Bagaimana kalau membaca buku atau menonton film di rumah?";
            break;
        case "badai":
            echo "Cuaca badai! Tetaplah di dalam rumah dan pastikan semua jendela tertutup rapat.";
            break;
        default:
            echo "Kondisi cuaca tidak diketahui. Periksalah ramalan cuaca untuk informasi lebih lanjut.";
    }
    ?>

</body>

</html>