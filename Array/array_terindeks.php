<!-- Dalam array terindeks, setiap item memiliki nomor indeks.

Secara default, item pertama memiliki indeks 0, item kedua memiliki item 1, dll. -->

<?php
$cars = array("Volvo", "BMW", "Toyota"); 
var_dump($cars);
// Menampilkan item array pertama:
$cars = array("Volvo", "BMW", "Toyota"); 
echo $cars[0];
// Mengubah nilai item kedua:
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
?>
