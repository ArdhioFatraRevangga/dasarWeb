<?php
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($grades);
$gradesToConsider = array_slice($grades, 2, -2);
$totalGrades = array_sum($gradesToConsider);

// Display 
echo "Original grades: " . implode(", ", $grades) . "<br>";
echo "Grades after removing two lowest and two highest: " . implode(", ", $gradesToConsider) . "<br>";
echo "Total of the remaining grades: $totalGrades<br>";
?>
