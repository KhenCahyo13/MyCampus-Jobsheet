<?php
    $grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

    sort($grades);
    
    $gradesToConsider = array_slice($grades, 2, 6);
    $totalScore = array_sum($gradesToConsider);
    $averageGrade = $totalScore / count($gradesToConsider);
    
    echo "Total score used for average: $totalScore <br>";
    echo "Average grade: $averageGrade";
?>