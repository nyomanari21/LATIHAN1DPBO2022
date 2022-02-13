import java.util.Scanner;

public class Main{

	public static void main(String[] args){

		//penyimpan banyaknya tim sepak bola
		int n = 0;

		Scanner sc = new Scanner(System.in);

		//input banyaknya tim sepak bola
		System.out.print("Masukkan banyaknya tim sepak bola: ");
		try{
			n = sc.nextInt();
		}catch(Exception e){}

		//membuat array untuk objek tim sepak bola
		TimSepakBola arrTim[] = new TimSepakBola[n];

		//penyimpan input data tim sepak bola
		String nama_tim = "";
		String negara = "";
		String tahun_berdiri = "";
		String pemain = "";
		String pelatih = "";

		//input data tim sepak bola
		int i = 0, j = 0; //iterator
		int jumPemain[] = new int[n]; //penyimpan jumlah pemain tim
		System.out.println("");
		for(i = 0; i < n; i++){

			arrTim[i] = new TimSepakBola();

			System.out.println("====================");
			System.out.println("Masukkan data tim sepak bola " + (i+1));

			System.out.print("Nama Tim: ");
			try{
				nama_tim = sc.next();
			}catch(Exception e){}
			arrTim[i].setNamaTim(nama_tim);

			System.out.print("Negara: ");
			try{
				negara = sc.next();
			}catch(Exception e){}
			arrTim[i].setNegara(negara);

			System.out.print("Tahun Berdiri: ");
			try{
				tahun_berdiri = sc.next();
			}catch(Exception e){}
			arrTim[i].setTahunBerdiri(tahun_berdiri);

			//input jumlah pemain
			System.out.print("Jumlah Pemain: ");
			try{
				jumPemain[i] = sc.nextInt();
			}catch(Exception e){}

			//input pemain-pemain tim dengan loop
			System.out.println("Pemain:");
			for(j = 0; j < jumPemain[i]; j++){
				try{
					pemain = sc.next();
				}catch(Exception e){}
				arrTim[i].setPemain(j, pemain);
			}

			System.out.print("Pelatih: ");
			try{
				pelatih = sc.next();
			}catch(Exception e){}
			arrTim[i].setPelatih(pelatih);

		}

		//menampilkan data tim sepak bola
		System.out.println("");
		for(i = 0; i < n; i++){

			System.out.println("====================");
			System.out.println("----------");
			System.out.println("Tim " + (i+1));
			System.out.println("----------");

			System.out.println("Nama Tim: " + arrTim[i].getNamaTim());
			System.out.println("Negara: " + arrTim[i].getNegara());
			System.out.println("Tahun Berdiri: " + arrTim[i].getTahunBerdiri());
			//menampilkan semua pemain dengan loop
			System.out.println("Pemain:");
			for(j = 0; j < jumPemain[i]; j++){
				System.out.println(" - " + arrTim[i].getPemain(j));
			}
			System.out.println("Pelatih: " + arrTim[i].getPelatih());

		}

		System.out.println("====================");

	}

}