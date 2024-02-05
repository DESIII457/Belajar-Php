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