<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar container">
        <a href="#" class="logo">
            <img src="1670222462757.jpg" width="50" height="50">
        </a>
        <input type="checkbox" id="toggler"/>
        <label for="toggler">
            <i class="ri-menu=line"></i>
        </label>
        <div class="menu">
            <ul class="list">
                <li>
                    <a href="operator.php">Operator</a>
                </li>
                <li>
                    <a href="percabangan.php">Percabangan</a>
                </li>
                <li>
                    <a href="Data_type.php">Tipe Data</a>
                </li>
                <li>
                    <a href="function.php">Fungsi   </a>
                </li>
                <li>
                    <a href="Perulangan.php">Perulangan</a>
                </li>
                <li>
                    <a href="form.php">Form</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <h2>Boolean</h2>
    <fieldset>
        <!-- Boolean mewakili dua kemungkinan keadaan: TRUE atau FALSE. -->
        <?php
            $x = true;
            var_dump($x);
            // Boolean sering digunakan dalam pengujian kondisional.
        ?>
        <!-- Float (angka floating point) adalah angka dengan koma desimal atau angka dalam bentuk eksponensial.
        Dalam contoh berikut adalah float. Fungsi PHP mengembalikan tipe dan nilai data:$xvar_dump() -->
    </fieldset>
    <h2>Float</h2>
    <fieldset>
        <?php
            $x = 10.365;
            var_dump($x);
        ?>   
    </fieldset>
    <h2>Integer</h2>
    <fieldset>
        <!-- PHP Integer
        Tipe data bilangan bulat adalah angka non-desimal antara -2.147.483.648 dan 2,147,483,647.

        Aturan untuk bilangan bulat:

        Bilangan bulat harus memiliki setidaknya satu digit
        Bilangan bulat tidak boleh memiliki koma desimal
        Bilangan bulat dapat berupa positif atau negatif
        Bilangan bulat dapat ditentukan dalam: desimal (basis 10), heksadesimal (basis 16), oktal (basis 8), atau notasi biner (basis 2) -->

        <?php
            $x = 5985;
            var_dump($x);

        ?>  
    </fieldset>
    <h2>Null</h2>
    <fieldset>
        <!-- Null adalah tipe data khusus yang hanya dapat memiliki satu nilai: NULL.
        Variabel tipe data NULL adalah variabel yang tidak memiliki nilai yang ditetapkan untuknya.
        Ujung: Jika variabel dibuat tanpa nilai, itu adalah secara otomatis menetapkan nilai NULL.
        Variabel juga dapat dikosongkan dengan menetapkan nilai ke NULL: -->

        <?php
            $x = "Hello world!";
            $x = null;
            var_dump($x);
        ?>
    </fieldset>
    <h2>Objek</h2>
    <fieldset>
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
    </fieldset>
        <!-- Kelas dan objek adalah dua aspek utama dari pemrograman berorientasi objek.
        Kelas adalah template untuk objek, dan objek adalah turunan dari kelas.
        Ketika objek individu dibuat, mereka mewarisi semua properti dan perilaku dari kelas, 
        tetapi setiap objek akan memiliki nilai yang berbeda untuk Properti.
        Mari kita asumsikan kita memiliki kelas bernama itu dapat memiliki properti seperti model, warna, dll. 
        Kita dapat mendefinisikan variabel seperti , , dan seterusnya, untuk menahan nilai properti ini.Car$model$color
        Ketika objek individu (Volvo, BMW, Toyota, dll.) dibuat, mereka mewarisi semua properti dan perilaku dari kelas, 
        tetapi setiap objek akan memiliki nilai yang berbeda untuk properti.
        Jika Anda membuat fungsi, PHP akan secara otomatis memanggil ini berfungsi saat Anda membuat objek dari kelas.__construct() -->
    <h2>String</h2>
    <fieldset>
        <!-- String adalah urutan karakter, seperti "Halo dunia!".
        String dapat berupa teks apa pun di dalam tanda kutip. Anda dapat menggunakan tanda kutip tunggal atau ganda -->

        <?php 
            $x = "Hello world!";
            $y = 'Hello world!';

            var_dump($x);
            echo "<br>"; 

            var_dump($y);
        ?>              
    </fieldset>
    <h2>Array</h2>                                                                                                                                                                                                                                                                                            
    <fieldset>
        <?php
            // Array adalah variabel khusus yang dapat menampung banyak nilai di bawah satu nama, 
            // Dan Anda dapat mengakses nilai dengan mengacu pada nomor indeks atau nama.
            $cars = array("Volvo", "BMW", "Toyota");
            echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
            // Jenis Array PHP
            // Dalam PHP, ada tiga jenis array:

            // Array terindeks - Array dengan indeks numerik
            // Array asosiatif - Array dengan tombol bernama
            // Array multidimensi - Array yang berisi satu atau lebih array
        ?>
    </fieldset>
</body>
</html>