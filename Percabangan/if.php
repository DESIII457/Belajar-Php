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
<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(49a61e26d5905c8a41291d80c3aa999a.jpg);
        background-size: cover;
    }
    fieldset {
        border-bottom: none;
        box-shadow: none;
        width: 600px;
        height: 200px;
        background-color: pink;
        border-radius: 45px;
        text-align: justify;
        margin-top: -70px;
        border: none;
    }
    .img {
        margin-top: -110px;
        margin-right: 10px;
    }

</style>
