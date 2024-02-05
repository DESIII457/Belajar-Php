<!-- Array multidimensi adalah array yang berisi satu atau lebih array.

PHP mendukung array multidimensi yaitu dua, tiga, empat, lima, atau lebih banyak level dalam. Namun, array lebih dari tiga tingkat sulit dikelola bagi kebanyakan orang -->
<!-- Dimensi array menunjukkan jumlah indeks yang Anda butuhkan untuk memilih elemen.

Untuk array dua dimensi, Anda memerlukan dua indeks untuk memilih elemen
Untuk array tiga dimensi, Anda memerlukan tiga indeks untuk memilih elemen -->

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
