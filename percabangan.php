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
                    <a href="percabangan.php"> Percabangan</a>
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
    <h2>If Else</h2>
    <fieldset>
        <?php
            // percabangan if else memiliki dua pilihan. jika <kondisi> bernilai false, 
            // maka blok else akan dikerjakan 

            $umur = 13;

            if ($umur < 50){
                echo "<b>Kamu tidak boleh membuka situs ini!</b>";
            } else {
                echo "Selamat datang di website php kami!";
            }

        ?>
        <!-- jika nilai $umur diganti menjadi 51 makan tampilan echo else yang akan muncul -->
    </fieldset>
    <h2>If else If else</h2>
    <fieldset>
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
            // jika variable $nilai diubah menjadi 54
            // maka hasilnya C+ 
            
        ?>
    </fieldset>
    <h2>If</h2>
    <fieldset>
        <?php
            // bentuk yang paling sederhana dari percabangan adalah "if"
            // biasanya digunakan saat hanya ada satu tindakan yang harus dilakukan

            $total_belanja  = 150000;

            if($total_belanja > 100000){
                echo "Selamat anda dapat hadiah, berupa tiket ke Isekai😋";
            }

            // teks "Selamat anda dapat hadiah, berupa tiket ke Isekai😋" hanya akan ditampilkan saat
            // kondisi variabel $total_belanja bernilai di atas 100000 kalau dibawa 100000, 
            // tidak akan menampilkan apa apa. kondisi yang digunakan pada contoh di atas adalah:

            // $total_belanja  = 150000;

            // kondisi atau pernyataan ini akan bernilai true atau false. jika true (benar), maka
            // kode yang ada didalamnya akan dieksekusi. namun apabila false maka tidak akan dieksekusi
        ?>
    </fieldset>
    <h2>Percabangan dengan operator ternary</h2>
    <fieldset>
        <?php
            // percabangan menggunakan operator ternary adalah bentuk sederhana
            // dari percabangan if/else
            $a = true;

            echo $a ? "Desi": "Lisnawati";
            // artinya jika variable $a bernilai true maka
            // cetak "Desi". tapi kalau bernilai false, maka cetak "Lisnawati"
        ?>
    </fieldset>
</body>
</html>