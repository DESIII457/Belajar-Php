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