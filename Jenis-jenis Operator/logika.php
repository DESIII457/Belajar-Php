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