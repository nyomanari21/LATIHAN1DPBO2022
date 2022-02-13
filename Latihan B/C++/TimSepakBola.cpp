class TimSepakBola{

	//atribut private
	private:

		string nama_tim;
		string negara;
		string tahun_berdiri;
		string pemain[50];
		string pelatih;

	public:

		//konstruktor
		TimSepakBola(){

		}

		//getter dan setter nama tim
		void setNamaTim(string nama_tim){
			this->nama_tim = nama_tim;
		}

		string getNamaTim(){
			return this->nama_tim;
		}

		//getter dan setter asal negara tim
		void setNegara(string negara){
			this->negara = negara;
		}

		string getNegara(){
			return this->negara;
		}

		//getter dan setter tahun berdiri tim
		void setTahunBerdiri(string tahun_berdiri){
			this->tahun_berdiri = tahun_berdiri;
		}

		string getTahunBerdiri(){
			return this->tahun_berdiri;
		}

		//getter dan setter pemain
		void setPemain(int indeks, string pemain){
			this->pemain[indeks] = pemain;
		}

		string getPemain(int indeks){
			return this->pemain[indeks];
		}

		//getter dan setter pelatih
		void setPelatih(string pelatih){
			this->pelatih = pelatih;
		}

		string getPelatih(){
			return this->pelatih;
		}

		//destruktor
		~TimSepakBola(){

		}

};