<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERATOR</title>
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
    <h2>Contoh Aritmatika</h2>
    <fieldset>
        <?php
            $a = 5;
            $b = 2;
            // mula mula kita punya 2 variable, yaitu $a dan $b dengan nilai awal 5 dan 2
            // kemudian kita menggunakan operator aritmatika untuk melakukan
            // operasi terhadap dua nilai atau variable tersebut. lalu hasilnya disimpan ke variable $c

            // penjumlahan
            $c = $a + $b;
            echo "$a + $b = $c";
            echo "<hr>";

            // pengurangan
            $c = $a - $b;
            echo "$a - $b = $c";
            echo "<hr>";

            // perkalian
            $c = $a * $b;
            echo "$a * $b = $c";
            echo "<hr>";
            // perhatikan juga simbol simbol yang dipakai. pada matematika, perkalian biasanya
            // menggunakan simbol x. namun didalam pemrograman perkalian itu menggunakan simbol *.

            // pembagian
            $c = $a / $b;
            echo "$a / $b = $c";
            echo "<hr>";

            // sisa bagi
            $c = $a % $b;
            echo "$a % $b = $c";
            echo "<hr>";
            // lalu operator %(modulo), ini adalah operator untuk menghitung sisa bagi

            // pangkat
            $c = $a ** $b;
            echo "$a ** $b = $c";
            echo "<hr>";

        ?>
    </fieldset>
    <h2>Bitwise</h2>
    <fieldset>
        <?php
            // operator bitwise merupakan operator yang digunakan untuk operasi bit(biner)

            // operator ini terdiri dari:
            // AND                 &
            // OR                  |
            // XOR                 ^
            // NEGASI/KEBALIKAN    ~
            // LEFT SHIFT          <<
            // RIGHT SHIFT         >>

            $a = 60;
            $b = 13;
            // operator ini berlaku untuk tipe data int, long, short, char, dan byte.
            // operator ini akan menghitung dari bit ke bit.
            // misanya, kita punya variabel a = 60 dan b = 13.
            // bila dibuat ke dalam bentuk binner, akan menjadi seperti ini

            // a = 00111100
            // b = 00001101

            // bitwise AND 
            $c = $a & $b;
            echo "$a & $b = $c";
            echo "<br>";
            // a = 00111100
            // b = 00001101
            // a & b = 00001100

            // bitwise OR
            $c = $a | $b;
            echo "$a | $b = $c";
            echo "<br>";
            // a = 00111100
            // b = 00001101
            // a | b = 00111101

            // bitwise XOR
            $c = $a ^ $b;
            echo "$a ^ $b = $c";
            echo "<br>";
            // a = 00111100
            // b = 00001101
            // a ^ b = 00110001

            // shift left
            $c = $a << $b;
            echo "$a << $b = $c";
            echo "<br>";

            // shift right
            $c = $a >> $b;
            echo "$a >> $b = $c";
            echo "<br>";

            // konsepnya memang hampir sama dengan operator logika 
            // bedanya, bitwise digunakan untuk binner
        ?>
    </fieldset>
    
    <h2>
        Increment Dan decrement
    </h2>
    <fieldset>
        <?php
            // operator increment dan decrement merupakan operator yang digunakan
            // untu menambah +1 (tambah satu) dan mengurangi -1 (kurangi dengan statu)
            // operator increment menggunakan  simbol++, sedangkan decrement mnggunakan simbol --

            $score = 0;

            $score++;
            $score++;
            $score++;
            // nilai score akan menjadi 3 karena kta melakukan  increment sebanyak 3 kali

            echo $score;

        ?>
    </fieldset>
    <h2>Logika</h2>
    <fieldset>
        <?php
            // operator logika adalah operator untuk melakukan logika 
            // seperti and, or, dan not.

            $a = true;
            $b = false;

            //variabel $c akan bernilai false
            $c = $a && $b;
            printf("%b && %b = %b", $a,$b,$c);
            // fungsi printf akan selalu mengembalikan nilai 1 saat dieksekusi,
            // sedagkan echo() tidak mengembalikan apa apa dan fungsi printf hanya boleh diberikan satu parameter
            // saja, sedangkan echo boleh lebih dari satu
            echo "<hr>";

            // variabel $c akan bernilai true
            $c = $a || $b;
            printf("%b || %b = %b", $a,$b,$c);
            echo "<hr>";


            $c = !$a;
            printf("!%b = %b", $a,$c);
            echo "<hr>";

            // saya mengunakan fungsi printf() untuk mencetak memformat dan mencetak teks
            // namun akan tetap menampilkan 1 untuk true dan 0 untuk false
            // perhatikan hasil yang didapatkan ketika menggunakan operator && (AND), || (OR),
            // dan ! (NOT)

            // operator && akan menghasilkan true apabila nilai kiri dan kanan bernilai true.
            // sedangkan operator || akan menghasilkan false saat nilai kiri dan kanan bernilai false.
        ?>
    </fieldset>
    <h2>Relasi</h2>
    <fieldset>
        <?php
            // operator relasi adalah operator untuk membandingkan dua buah nilai.
            // hasil operasi dari operator relasi akan  menghasilkan nilai dengan tipe data boolean,
            // true (benar) dan (false) salah.
            $a = 6;
            $b = 2;
            // menggunakan operator relasi lebih besar
            $c = $a > $b;
            echo "$a > $b: $c";
            echo "<hr>";
            // menggunakan operator relasi lebih kecil
            $c = $a < $b;
            echo "$a < $b: $c";
            echo "<hr>";
            // menggunakan operator relasi lebih sama dengan
            $c = $a == $b;
            echo "$a == $b: $c";
            echo "<hr>";
            // menggunakan operator relasi lebih tidak sama dengan
            $c = $a != $b;
            echo "$a != $b: $c";
            echo "<hr>";
            // menggunakan operator relasi lebih besar sama dengan
            $c = $a >= $b;
            echo "$a >= $b: $c";
            echo "<hr>";
            // menggunakan operator relasi lebih kecil sama dengan
            $c = $a <= $b;
            echo "$a <= $b: $c";
            echo "<hr>";
            // kita akan mendapatkan nilai 1untuk true, sedangkan false tidak ditampilkan atau 0
            // ini tidak salah, memang seperti itulah sifat dari fungsi echo di PHP.
            // nilai dengan tipe data boolean biasanya tidak untuk ditampilkan. biasanya digunakan
            // untuk pembuatan kondisi pada percabangan
        ?>
    </fieldset>
    <h2>Ternary</h2>
    <fieldset>
    <?php
        // operator ternary adalah operator untuk membuat suatu kondisi.
        // simbol yang digunakan adalah tanda tanya (?) dan titik 2 (:)
        $susah = true;

        // menggunakan operator ternary
        $jawab = $susah ? "iya": "tidak";

        // menampilkan jawaban
        echo $jawab;

        // bisa juga kalau nilai variable $susah nya diganti jadi false.
        // maka outputnya bakal berubah jada tidak
    ?>
    </fieldset>
</body>
</html>