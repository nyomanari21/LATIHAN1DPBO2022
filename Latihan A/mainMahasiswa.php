<?php

//include kelas Mahasiswa
include "Mahasiswa.php";

//membuat objek mahasiswa 1
$mahasiswa1 = new Mahasiswa();

//set atribut mahasiswa 1
$mahasiswa1->setNIM(111);
$mahasiswa1->setNama("Udin");
$mahasiswa1->setJK("Laki-Laki");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

//membuat objek mahasiswa 2
$mahasiswa2 = new Mahasiswa(112, "Mamat", "Laki-Laki", "Ilmu Komputer", 4);

//menampilkan objek mahasiswa 1 dan mahasiswa 2
echo "Mahasiswa 1"."<br/>";
echo "NIM: ".$mahasiswa1->getNIM()."<br/>";
echo "Nama: ".$mahasiswa1->getNama()."<br/>";
echo "Jenis Kelamin: ".$mahasiswa1->getJK()."<br/>";
echo "Program Studi: ".$mahasiswa1->getProdi()."<br/>";
echo "Semester: ".$mahasiswa1->getSemester()."<br/>";

echo "<br/>";

echo "Mahasiswa 2"."<br/>";
echo "NIM: ".$mahasiswa2->getNIM()."<br/>";
echo "Nama: ".$mahasiswa2->getNama()."<br/>";
echo "Jenis Kelamin: ".$mahasiswa2->getJK()."<br/>";
echo "Program Studi: ".$mahasiswa2->getProdi()."<br/>";
echo "Semester: ".$mahasiswa2->getSemester()."<br/>";

?>