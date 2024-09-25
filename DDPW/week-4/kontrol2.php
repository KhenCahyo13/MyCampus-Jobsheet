<?php
    $hargaAwal = 120000;
    $diskonPersen = 20;

    if ($hargaAwal > 100000) {
        $diskon = ($diskonPersen / 100) * $hargaAwal;

        $hargaSetelahDiskon = $hargaAwal - $diskon;
    } else {
        $hargaSetelahDiskon = $hargaAwal;
    }

    echo "Harga yang harus dibayar setelah diskon adalah: Rp " . number_format($hargaSetelahDiskon, 2, ',', '.');
?>