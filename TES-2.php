<?php
// Data uji
$mark_berat1 = 78; 
$mark_tinggi1 = 1.69; 

$john_berat1 = 92; 
$john_tinggi1 = 1.95; 

$mark_berat2 = 95; 
$mark_tinggi2 = 1.88; 

$john_berat2 = 85; 
$john_tinggi2 = 1.76; 

function hitungBMI($berat, $tinggi) {
    return $berat / ($tinggi * $tinggi);
}


$mark_bmi1 = hitungBMI($mark_berat1, $mark_tinggi1);
$john_bmi1 = hitungBMI($john_berat1, $john_tinggi1);

$mark_bmi2 = hitungBMI($mark_berat2, $mark_tinggi2);
$john_bmi2 = hitungBMI($john_berat2, $john_tinggi2);


$markHigherBMI1 = $mark_bmi1 > $john_bmi1;


$markHigherBMI2 = $mark_bmi2 > $john_bmi2;

// Menampilkan hasil untuk Data 1
echo "Data 1:\n";
echo "Mark: Berat {$mark_berat1} kg, Tinggi {$mark_tinggi1} m, BMI: " . number_format($mark_bmi1, 2) . "\n";
echo "John: Berat {$john_berat1} kg, Tinggi {$john_tinggi1} m, BMI: " . number_format($john_bmi1, 2) . "\n";
echo "Mark memiliki BMI lebih tinggi dari John: " . ($markHigherBMI1 ? 'Ya' : 'Tidak') . "\n";

// Menampilkan hasil untuk Data 2
echo "\nData 2:\n";
echo "Mark: Berat {$mark_berat2} kg, Tinggi {$mark_tinggi2} m, BMI: " . number_format($mark_bmi2, 2) . "\n";
echo "John: Berat {$john_berat2} kg, Tinggi {$john_tinggi2} m, BMI: " . number_format($john_bmi2, 2) . "\n";
echo "Mark memiliki BMI lebih tinggi dari John: " . ($markHigherBMI2 ? 'Ya' : 'Tidak') . "\n";
?>
