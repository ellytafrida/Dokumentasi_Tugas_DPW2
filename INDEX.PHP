<?php

echo "Animal <br>";
echo "<hr>";

class kucing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Kucing = new Kucing;
$Kucing->nama = "mazzya";
$Kucing->jumlah_kaki = "4";
$Kucing->bisa_terbang = "tidak";
$Kucing->suara = "meoong";

echo "Kucing <br>";
echo "Nama : $Kucing->nama <br>";
echo "Punya Kaki Sebanyak : $Kucing->jumlah_kaki <br>";
echo "Bisa Terbang : $Kucing->bisa_terbang <br>";
echo "Suara : $Kucing->suara <br>";
echo "<hr>";

class Anjing{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Anjing = new Anjing;
$Anjing->nama = "Decort";
$Anjing->jumlah_kaki = "4";
$Anjing->bisa_terbang = "tidak";
$Anjing->suara = "guk guk ";

echo "Anjing <br>";
echo "Nama : $Anjing->nama <br>";
echo "Punya Kaki Sebanyak : $Anjing->jumlah_kaki <br>";
echo "Bisa Terbang : $Anjing->bisa_terbang <br>";
echo "Suara : $Anjing->suara <br>";
echo "<hr>";

class Elang{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Elang = new Elang;
$Elang->nama = "Jinka";
$Elang->jumlah_kaki = "2";
$Elang->bisa_terbang = "ya";
$Elang->suara = "miip";

echo "Elang <br>";
echo "Nama : $Elang->nama <br>";
echo "Punya Kaki Sebanyak : $Elang->jumlah_kaki <br>";
echo "Bisa Terbang : $Elang->bisa_terbang <br>";
echo "Suara : $Elang->suara <br>";
echo "<hr>";

class Angsa{
    public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}
$Angsa = new Angsa;
$Angsa->nama = "Dokol";
$Angsa->jumlah_kaki = "2";
$Angsa->bisa_terbang = "tidak";
$Angsa->suara = "kwak";

echo "Angsa <br>";
echo "Nama : $Angsa->nama <br>";
echo "Punya Kaki Sebanyak : $Angsa->jumlah_kaki <br>";
echo "Bisa Terbang : $Angsa->bisa_terbang <br>";
echo "Suara : $Angsa->suara <br>";
echo "<hr>";


