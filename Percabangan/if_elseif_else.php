<?php
// percabangan if elseif else memiliki lebih dari 2 percabangan
$nilai = 88;

if ($nilai > 90){
    $grade = "A+";
} elseif ($nilai > 80){
    $grade = "A";
} elseif ($nilai > 70){
    $grade = "B+";
} elseif ($nilai > 60){
    $grade = "B";
} elseif ($nilai > 50){
    $grade = "C+";
} elseif ($nilai > 40){
    $grade = "C";
} elseif ($nilai > 30){
    $grade = "D";
} elseif ($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
} 

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";
// fungsi echo adalah untuk menampilkan teks ke layar. fungsi ini dapat
// digunakan dengan tanda kurung maupun tanda kurung

?>

<!-- jika variable $nilai diubah menjadi 54
maka hasilnya C+ -->