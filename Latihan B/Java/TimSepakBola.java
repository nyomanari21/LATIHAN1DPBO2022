public class TimSepakBola{

	//atribut private
	private String nama_tim;
	private String negara;
	private String tahun_berdiri;
	private String pemain[] = new String[50];
	private String pelatih;

	//konstruktor
	public TimSepakBola(){

	}

	//getter dan setter nama tim
	public void setNamaTim(String nama_tim){
		this.nama_tim = nama_tim;
	}

	public String getNamaTim(){
		return this.nama_tim;
	}

	//getter dan setter asal negara tim
	public void setNegara(String negara){
		this.negara = negara;
	}

	public String getNegara(){
		return this.negara;
	}

	//getter dan setter tahun berdiri tim
	public void setTahunBerdiri(String tahun_berdiri){
		this.tahun_berdiri = tahun_berdiri;
	}

	public String getTahunBerdiri(){
		return this.tahun_berdiri;
	}

	//getter dan setter pemain
	public void setPemain(int indeks, String pemain){
		this.pemain[indeks] = pemain;
	}

	public String getPemain(int indeks){
		return this.pemain[indeks];
	}

	//getter dan setter pelatih
	public void setPelatih(String pelatih){
		this.pelatih = pelatih;
	}

	public String getPelatih(){
		return this.pelatih;
	}

}