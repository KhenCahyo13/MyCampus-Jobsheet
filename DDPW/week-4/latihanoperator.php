<?php
    // If Else
    $nilai = 85;
    if ($nilai > 90) {
        echo "A+";
    } elseif ($nilai > 80) {
        echo "A";
    } else {
        echo "Belajar lebih keras";
    }

    echo "<br><br>";

    // Switch
    $hari = 'Senin';
    switch ($hari) {
        case "Senin";
            echo "Hari kerja.";
            break;
        case "Sabtu":
        case "Minggu";
            echo "Akhir pekan.";
            break;
        default:
            echo "Hari tidak valid.";
    }

    echo "<br><br>";

    // Looping
    for ($i = 1; $i <= 5; $i++) {
        echo "Iterasi ke $i <br>";
    }

    echo "<br><br><br>";

    $counter = 1;
    while ($counter <= 5) {
        echo "Iterasi ke $counter <br>";
        $counter++;
    }

    echo "<br><br>";

    do {
        echo "Iterasi ke $counter <br>";
        $counter++;
    } while ($counter <= 5);

    echo "<br><br><br>";

    // Flow Control Statement
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break;
        }

        echo "Iterasi ke $i <br>";
    }

    echo "<br><br>";

    for ($i = 1; $i <= 10; $i++) {
        if ($i == 3) {
            continue;
        }

        echo "Iterasi ke $i <br>";
    }
?>