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
                    <a href="function.php">Fungsi</a>
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
    <h2>Perulangan For</h2>
    <fieldset>
        <?php
            for ($i = 0; $i < 14; $i++){
                echo "<p>Desi ada di Isekai ke-$i</p>";
                // fungsi echo adalah untuk menampilkan teks ke layar. fungsi ini dapat
                // digunakan dengan tanda kurung maupun tanda kurung
            }

            // perulangan for adalah perulangan yang termasuk dalam counted
            // loop, karena kita bisa menentukan jumlah perulangan nya. 

            // variable $i dalam perulangan for befungsi sebagai counter yang menghitung
            // berapa kali ia akan mengulang (misalnya kita nulis 10; $i++ itu akan jadi perulangan 
            // yang terjadi sebanyak 10 kali) 

            // hitungan akan dimulai dari nol karena kita memberika nilai $i = 0

            // lalu perulangan akan di ulang selama nilai $i lebih kecill dari 10. Artinya, perulangan
            // ini akan mengulang sebanya 10 kali. maksud dari $i++ adalah nilai $i akan ditambah 1 setiap kali
            // melakukan perulangan
        ?>
    </fieldset>
    <h2>Perulangan bersarang</h2>
    <fieldset>
        <?php 
            $i = 0;
            while($i < 10){
                for ($j = 0; $j < 10 ; $j++) { 
                    echo "Ini perulangan ke ($i, $j)<br>";
                    // fungsi echo adalah untuk menampilkan teks ke layar. fungsi ini dapat
                    // digunakan dengan tanda kurung maupun tanda kurung
                }

                $i++;
            }

            // perulangan bersarang adalah istilah untuk menyebut perulangan dalam perulangan.
            // dalam bahsa inggris, perulangan bersarang disebut nested loop
        ?>
    </fieldset>
    <h2>Perulangan Do While</h2>
    <fieldset>
        <?php
            // perulangan do/while sama seperti perulangan while. ia juga tergolong dalam oncounted loop.
            // perbedaan do/while dengan while terletak pada cara ia memulai perulangan.
            // perulangan do/while akan selalu melakukan pengulangann sebanyak 1 kali, kemudian melakukan
            // pengecekan kondisi. sedangkan perulangan while akan mengecek kondisi terlebih dahulu,
            // baru melakukan pengulangann.

            // berikut contoh nya

            $ulangi = 10;
            // ini variable nya

            do {
                echo "<p>Ini adalah perulangan desi yang lagi lagi ke isekai ke-$ulangi</p>";
                $ulangi--;
            } while ($ulangi > 0);
        ?>
    </fieldset>
    <h2>Perungan Foreach</h2>
    <fieldset>
        <?php
            // perulangan foreavh sama seperti perulangan for. namun ia lebih khusus
            // digunakan untuk mencetak array

            $books = [
                "Panduan ke Isekai untuk pemula",
                "Desi Lisnawati kelas 11 rpl",
                "php dan mysqsl",
                "perulangan"
            ];

            echo "<h5>Judul Buku PHP:</h5>";
            // fungsi echo adalah untuk menampilkan teks ke layar. fungsi ini dapat
            // digunakan dengan tanda kurung
            echo "<ul>";
            foreach ($books as $buku) {
                echo "<li>$buku</li>";
            }
            echo "</ul>";
        ?>
    </fieldset>
    <h2>While</h2>
    <fieldset>
        <?php
            $ulangi = 0;

            while ($ulangi < 10){
                    echo "<p>Ini adalah perulangan desi ke dunia anime ke-$ulangi</p>";
                    $ulangi++;

            }

            echo "<p>Hasilnya sama kaya yang perulangan for</p>";

            // perulangan while adalah perulangan yang termasuk dalam uncounted loop. karena
            // biasanya digunakan untuk mengulang sesuatu yang belum jelas jumlah pengulangannya
            // namun, perulangan while juga bisa digunakan seperti perulangan for sebagai counted loop
            // (kalo nulis ($ulangi > 10) itu hasilnya bakal gaada yang tampil nya cuman echo yang paling
            // bawah)

            // hati hati jangan sampai lupa menambahkan increment, atau kode yang akan memengaruhi
            // perulangan. karena kalau tidak, pengulangan nya gak bakalan berenti dan bakal bikin laptop 
            // kita nge hang 
        ?>
    </fieldset>
</body>
</html>