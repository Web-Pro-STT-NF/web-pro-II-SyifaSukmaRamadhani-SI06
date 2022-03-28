<?php
require_once "kucing.php";
//membuat objek / instance objek kucing
$garfield = new Kucing("garfield", 15, "belang-belang");
$bolang = new Kucing("bolang", 10, "oren");
echo $garfield->makan() . "<br>";
echo $garfield->tidur() . "<br>";
echo $garfield->lari() . "<br>";

echo $bolang->makan() . "<br>";
echo $bolang->tidur() . "<br>";
echo $bolang->lari() . "<br>";
