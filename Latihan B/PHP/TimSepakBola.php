<?php

class TimSepakBola{

	//atribut private
	private $nama_tim;
	private $negara;
	private $tahun_berdiri;
	private $pemain = array();
	private $pelatih;

	//konstruktor
	public function __construct(){

	}

	//getter dan setter untuk nama tim
	public function setNamaTim($nama_tim){
		$this->nama_tim = $nama_tim;
	}

	public function getNamaTim(){
		return $this->nama_tim;
	}

	//getter dan setter untuk asal negara tim
	public function setNegara($negara){
		$this->negara = $negara;
	}

	public function getNegara(){
		return $this->negara;
	}

	//getter dan setter untuk tahun berdiri tim
	public function setTahunBerdiri($tahun_berdiri){
		$this->tahun_berdiri = $tahun_berdiri;
	}

	public function getTahunBerdiri(){
		return $this->tahun_berdiri;
	}

	//getter dan setter untuk pemain
	public function setPemain($indeks, $pemain){
		$this->pemain[$indeks] = $pemain;
	}

	public function getPemain($indeks){
		return $this->pemain[$indeks];
	}

	//getter dan setter untuk pelatih
	public function setPelatih($pelatih){
		$this->pelatih = $pelatih;
	}

	public function getPelatih(){
		return $this->pelatih;
	}

	//destruktor
	public function __destruct(){

	}

}

?>