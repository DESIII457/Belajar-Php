<?php
// Array asosiatif adalah array yang menggunakan kunci bernama yang Anda tetapkan untuk mereka.


// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// var_dump($car);

// tampilkan model mobil saja
// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// echo $car["model"];

// mengubah item year
// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// $car["year"] = 2024;
// var_dump($car);

// Mengulang melalui array asosiatif
// Untuk mengulang dan mencetak semua nilai array asosiatif, Anda bisa menggunakan loop, seperti ini:foreach

// Menampilkan semua item, kunci, dan nilai array:
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>