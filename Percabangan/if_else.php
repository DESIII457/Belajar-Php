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
<style>
    b {
        color: red;
    }
</style>