<?php
//membuat variable
//$namaVariable = nilaiVariable
$name = "Syifa sukma";
$age = 20;
$weight = 20;

echo "<br>Name : " . $name;
echo "<br>Age : " . $age;
echo "<br>Weight : " . $weight;

//variabel user = variabel yang dibuat oleh user, sedangkan variabel sistem variabel yang telah dibuat oleh PHPnya itu sendiri
// echo "<br>Documen Root : " . $_SERVER['DOCUMENT_ROOT'];
// echo "<br>Nama File : " . $_SERVER['PHP_SELF'];

//variabel constant = ketika dibuat nilainya itu terus / tidak dapat diubah.
define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;
echo "<br>luas lingkaran : $luas";
?>