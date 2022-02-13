class TimSepakBola:

	#atribut private
	nama_tim = "-"
	negara = "-"
	tahun_berdiri = "-"
	pemain = []
	pelatih = "-"

	#konstruktor
	def __init__(self):
		self.nama_tim = "-"
		self.negara = "-"
		self.tahun_berdiri = "-"
		self.pemain = []
		self.pelatih = "-"

	#getter dan setter nama tim
	def setNamaTim(self, nama_tim):
		self.nama_tim = nama_tim

	def getNamaTim(self):
		return self.nama_tim

	#getter dan setter asal negara tim
	def setNegara(self, negara):
		self.negara = negara

	def getNegara(self):
		return self.negara

	#getter dan setter tahun berdiri tim
	def setTahunBerdiri(self, tahun_berdiri):
		self.tahun_berdiri = tahun_berdiri

	def getTahunBerdiri(self):
		return self.tahun_berdiri

	#getter dan setter pemain
	def setPemain(self, indeks, pemain):
		self.pemain.insert(indeks, pemain)

	def getPemain(self, indeks):
		return self.pemain[indeks]

	#getter dan setter pelatih
	def setPelatih(self, pelatih):
		self.pelatih = pelatih

	def getPelatih(self):
		return self.pelatih