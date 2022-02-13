<?php

class Mahasiswa{

	//atribut private
	private $nim;
	private $nama;
	private $jk;
	private $prodi;
	private $semester;

	//konstruktor
	public function __construct($nim = 0, $nama = "X", $jk = "X", $prodi = "X", $semester = 0){

		$this->nim = $nim;
		$this->nama = $nama;
		$this->jk = $jk;
		$this->prodi = $prodi;
		$this->semester = $semester;

	}

	//prosedur dan fungsi untuk getter dan setter

	//get dan set NIM
	public function setNIM($nim){
		$this->nim = $nim;
	}

	public function getNIM(){
		return $this->nim;
	}

	//get dan set nama
	public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

	//get dan set jenis kelamin
	public function setJK($jk){
		$this->jk = $jk;
	}

	public function getJK(){
		return $this->jk;
	}

	//get dan set program studi
	public function setProdi($prodi){
		$this->prodi = $prodi;
	}

	public function getProdi(){
		return $this->prodi;
	}

	//get dan set semester
	public function setSemester($semester){
		$this->semester = $semester;
	}

	public function getSemester(){
		return $this->semester;
	}

	//destruktor
	public function __destruct(){

	}

}

?>