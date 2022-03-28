<?php
include_once "Kucing.php";
include_once "persia.php";

//membuat instance class kucing
$kucing1 = new Kucing("meong", 3, 40);

//panggil atribut dari class kucing
echo "nama : " . $kucing1->getNama();
echo "<br>umur : " . $kucing1->getUmur() . "Tahun";
echo "<br>energi : " .  $kucing1->getEnergi() . "<br>";

//set nilai ulang 
$kucing1->setEnergi(100);
echo "energi : " . $kucing1->getEnergi() . "<br>";
//panggil method dari class kucing
echo $kucing1->makan() .  "<br>";
echo $kucing1->tidur() . "<br>";
echo $kucing1->lari() . "<br>";

echo "Energi sekarang : " . $kucing1->getEnergi() . "<br>";

$persia1 = new Persia("bolang", "orange", 140);
echo "Nama : " . $persia1->nama . "<br>";
echo "warna : " . $persia1->warna . "<br>";
echo "Energi : " . $persia1->energi . "<br>";
echo $persia1->persiaMakan();
