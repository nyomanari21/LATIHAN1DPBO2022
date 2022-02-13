#include <string>
#include <iostream>

using namespace std;

#include "TimSepakBola.cpp"

int main(){

	int n; //penyimpan banyaknya tim sepak bola
	int i = 0, j = 0; //iterator

	//input banyaknya tim sepak bola
	cout << "Masukkan banyaknya tim sepak bola: ";
	cin >> n;

	//membuat array untuk objek tim sepak bola
	TimSepakBola arrTim[n];

	//penyimpan input data tim sepak bola
	string nama_tim;
	string negara;
	string tahun_berdiri;
	string pemain;
	string pelatih;

	//input data tim sepak bola
	cout << endl;
	int jumPemain[n]; //penyimpan banyaknya pemain tiap tim
	for(i = 0; i < n; i++){

		cout << "===============================" << endl;
		cout << "Masukkan data tim sepak bola " << i+1 << endl;

		cout << "Nama Tim: ";
		cin >> nama_tim;
		arrTim[i].setNamaTim(nama_tim);

		cout << "Negara: ";
		cin >> negara;
		arrTim[i].setNegara(negara);

		cout << "Tahun Berdiri: ";
		cin >> tahun_berdiri;
		arrTim[i].setTahunBerdiri(tahun_berdiri);

		cout << "Jumlah Pemain: ";
		cin >> jumPemain[i]; //input jumlah pemain tim
		cout << "Pemain:" << endl;
		//input nama-nama pemain tim dengan loop
		for(j = 0; j < jumPemain[i]; j++){
			cin >> pemain;
			arrTim[i].setPemain(j, pemain);
		}

		cout << "Pelatih: ";
		cin >> pelatih;
		arrTim[i].setPelatih(pelatih);
		cout << "===============================" << endl;

	}

	//menampilkan data tim sepak bola
	cout << endl;
	for(i = 0; i < n; i++){

		cout << "====================" << endl;
		cout << "----------" << endl;
		cout << "Tim " << i+1 << endl;
		cout << "----------" << endl;
		cout << "Nama Tim: " << arrTim[i].getNamaTim() << endl;
		cout << "Negara: " << arrTim[i].getNegara() << endl;
		cout << "Tahun Berdiri: " << arrTim[i].getTahunBerdiri() << endl;
		cout << "Pemain:" << endl;
		//menampilkan semua pemain tim dengan loop
		for(j = 0; j < jumPemain[i]; j++){
			cout << " - " << arrTim[i].getPemain(j) << endl;
		}
		cout << "Pelatih: " << arrTim[i].getPelatih() << endl;

	}
	cout << "====================" << endl;
	
	return 0;
}