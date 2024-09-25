<?php
    $daftarSiswa = [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90]
    ];

    $totalNilai = 0;
    $jumlahSiswa = count($daftarSiswa);

    foreach ($daftarSiswa as $siswa) {
        $totalNilai += $siswa[1];
    }

    $averageNilai = $totalNilai / $jumlahSiswa;

    echo "Rata-rata kelas adalah: " . number_format($averageNilai, 2) . "<br>";
    echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

    foreach ($daftarSiswa as $siswa) {
        if ($siswa[1] > $averageNilai) {
            echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]}<br>";
        }
    }
?>
