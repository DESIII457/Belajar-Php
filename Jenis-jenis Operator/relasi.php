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