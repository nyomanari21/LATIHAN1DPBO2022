<?php

include "TimSepakBola.php";

//membuat objek tim sepak bola 1
$tim1 = new TimSepakBola();
$tim1->setNamaTim("Persib");
$tim1->setNegara("Indonesia");
$tim1->setTahunBerdiri("1933");
$jumPemain[0] = 4; //set jumlah pemain tim 1
$tim1->setPemain(0, "Ardi Idrus");
$tim1->setPemain(1, "Supardi Nasir");
$tim1->setPemain(2, "Abdul Aziz");
$tim1->setPemain(3, "Teja Paku Alam");
$tim1->setPelatih("Robert Rene Alberts");

//membuat objek tim sepak bola 2
$tim2 = new TimSepakBola();
$tim2->setNamaTim("FC Barcelona");
$tim2->setNegara("Spanyol");
$tim2->setTahunBerdiri("1899");
$jumPemain[1] = 3; //set jumlah pemain tim 1
$tim2->setPemain(0, "Ousmane Dembele");
$tim2->setPemain(1, "Sergio Busquets");
$tim2->setPemain(2, "Dani Alves");
$tim2->setPelatih("Xavi Hernandez");

//membuat objek tim sepak bola 3
$tim3 = new TimSepakBola();
$tim3->setNamaTim("Tarakarta FC");
$tim3->setNegara("Tarakarta");
$tim3->setTahunBerdiri("2022");
$jumPemain[2] = 2; //set jumlah pemain tim 1
$tim3->setPemain(0, "Tara");
$tim3->setPemain(1, "Gema");
$tim3->setPelatih("Chris");

//menampilkan data tim sepak bola 1
echo "===================="."<br/>";
echo "----------"."<br/>";
echo "Tim 1"."<br/>";
echo "----------"."<br/>";
echo "Nama Tim: ".$tim1->getNamaTim()."<br/>";
echo "Negara: ".$tim1->getNegara()."<br/>";
echo "Tahun Berdiri: ".$tim1->getTahunBerdiri()."<br/>";
//menampilkan tiap pemain tim dengan loop
echo "Pemain:"."<br/>";
for($i = 0; $i < $jumPemain[0]; $i++) {
  echo " - ".$tim1->getPemain($i)."<br/>";
}
echo "Pelatih: ".$tim1->getPelatih()."<br/>";
echo "===================="."<br/>";

//menampilkan data tim sepak bola 2
echo "===================="."<br/>";
echo "----------"."<br/>";
echo "Tim 2"."<br/>";
echo "----------"."<br/>";
echo "Nama Tim: ".$tim2->getNamaTim()."<br/>";
echo "Negara: ".$tim2->getNegara()."<br/>";
echo "Tahun Berdiri: ".$tim2->getTahunBerdiri()."<br/>";
//menampilkan tiap pemain tim dengan loop
echo "Pemain:"."<br/>";
for($i = 0; $i < $jumPemain[1]; $i++) {
  echo " - ".$tim2->getPemain($i)."<br/>";
}
echo "Pelatih: ".$tim2->getPelatih()."<br/>";
echo "===================="."<br/>";

//menampilkan data tim sepak bola 3
echo "===================="."<br/>";
echo "----------"."<br/>";
echo "Tim 3"."<br/>";
echo "----------"."<br/>";
echo "Nama Tim: ".$tim3->getNamaTim()."<br/>";
echo "Negara: ".$tim3->getNegara()."<br/>";
echo "Tahun Berdiri: ".$tim3->getTahunBerdiri()."<br/>";
//menampilkan tiap pemain tim dengan loop
echo "Pemain:"."<br/>";
for($i = 0; $i < $jumPemain[2]; $i++) {
  echo " - ".$tim3->getPemain($i)."<br/>";
}
echo "Pelatih: ".$tim3->getPelatih()."<br/>";
echo "===================="."<br/>";

?>