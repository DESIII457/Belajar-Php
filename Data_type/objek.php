<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>
<!-- Kelas dan objek adalah dua aspek utama dari pemrograman berorientasi objek.
Kelas adalah template untuk objek, dan objek adalah turunan dari kelas.
Ketika objek individu dibuat, mereka mewarisi semua properti dan perilaku dari kelas, 
tetapi setiap objek akan memiliki nilai yang berbeda untuk Properti.
Mari kita asumsikan kita memiliki kelas bernama itu dapat memiliki properti seperti model, warna, dll. 
Kita dapat mendefinisikan variabel seperti , , dan seterusnya, untuk menahan nilai properti ini.Car$model$color
Ketika objek individu (Volvo, BMW, Toyota, dll.) dibuat, mereka mewarisi semua properti dan perilaku dari kelas, 
tetapi setiap objek akan memiliki nilai yang berbeda untuk properti.
Jika Anda membuat fungsi, PHP akan secara otomatis memanggil ini berfungsi saat Anda membuat objek dari kelas.__construct() -->