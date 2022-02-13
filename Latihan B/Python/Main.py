from TimSepakBola import TimSepakBola

#input banyaknya tim
n = int(input("Masukkan banyaknya tim sepak bola: "))

#membuat array untuk objek tim sepak bola
arrTim = [TimSepakBola() for i in range(n)]

#iterator
i = 0
j = 0

#input data tim sepak bola
jumPemain = []
print("")
for i in range(n):
	print("===============================")
	print("Masukkan data tim sepak bola", i+1)
	nama_tim = str(input("Nama Tim: "))
	arrTim[i].setNamaTim(nama_tim)

	negara = str(input("Negara: "))
	arrTim[i].setNegara(negara)

	tahun_berdiri = str(input("Tahun Berdiri: "))
	arrTim[i].setTahunBerdiri(tahun_berdiri)

	#input jumlah pemain tim
	temp = int(input("Jumlah Pemain: "))
	jumPemain.insert(i, temp)
	print("Pemain:")
	#input nama-nama pemain dengan loop
	for j in range(jumPemain[i]):
		pemain = str(input())
		arrTim[i].setPemain(j, pemain)

	pelatih = str(input("Pelatih: "))
	arrTim[i].setPelatih(pelatih)	

#iterator
i = 0
j = 0

#menampilkan data tim sepak bola
print("")
for i in range(n):
	print("====================")
	print("----------")
	print("Tim", (i+1))
	print("----------")
	print("Nama Tim:", str(arrTim[i].getNamaTim()))
	print("Negara:", str(arrTim[i].getNegara()))
	print("Tahun Berdiri:", str(arrTim[i].getTahunBerdiri()))
	print("Pemain:")
	#menampilkan nama-nama pemain dengan loop
	for j in range(jumPemain[i]):
		print(" -", str(arrTim[i].getPemain(j)))
	print("Pelatih:", str(arrTim[i].getPelatih()))

print("====================")