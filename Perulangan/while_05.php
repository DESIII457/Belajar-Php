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