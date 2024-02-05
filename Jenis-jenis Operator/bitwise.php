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