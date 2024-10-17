<?php 
    $pattern = '/0.{1,3}/';
    $text = 'god is good.';

    if (preg_match($pattern, $text, $matches)) {
        echo 'Cocokkan: ' . $matches[0];
    } else {
        echo 'Tidak ada yang cocok!';
    }
?>
