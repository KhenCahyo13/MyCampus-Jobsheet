<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil tambah $a dan $b adalah $hasilTambah <br>";
    echo "Hasil kurang $a dan $b adalah $hasilKurang <br>";
    echo "Hasil kali $a dan $b adalah $hasilKali <br>";
    echo "Hasil bagi $a dan $b adalah $hasilBagi <br>";
    echo "Sisa bagi $a dan $b adalah $sisaBagi <br>";
    echo "Hasil pangkat $a dan $b adalah $pangkat <br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "<br><br><br>";
    var_dump($hasilSama);
    echo "<br>";
    var_dump($hasilTidakSama);
    echo "<br>";
    var_dump($hasilLebihKecil);
    echo "<br>";
    var_dump($hasilLebihBesar);
    echo "<br>";
    var_dump($hasilLebihKecilSama);
    echo "<br>";
    var_dump($hasilLebihBesarSama);

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "<br><br><br>";
    var_dump($hasilAnd);
    echo "<br>";
    var_dump($hasilOr);
    echo "<br>";
    var_dump($hasilNotA);
    echo "<br>";
    var_dump($hasilNotB);

    echo "<br><br><br>";
    var_dump($a += $b);
    echo "<br>";
    var_dump($a -= $b);
    echo "<br>";
    var_dump($a *= $b);
    echo "<br>";
    var_dump($a /= $b);
    echo "<br>";
    var_dump($a %= $b);

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "<br><br><br>";
    var_dump($hasilIdentik);
    echo "<br>";
    var_dump($hasilTidakIdentik);
?>