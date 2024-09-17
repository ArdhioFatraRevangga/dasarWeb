<?php
$totalSeats = 45;
$seatsOccupied = 28;
$seatsEmpty = $totalSeats - $seatsOccupied;
$percentageEmpty = ($seatsEmpty / $totalSeats) * 100;

echo "Total seats: $totalSeats <br>";
echo "Seats occupied: $seatsOccupied <br>";
echo "Seats empty: $seatsEmpty <br>";
echo "Percentage of empty seats: " . number_format($percentageEmpty, 2) . "%<br>";
?>
