<?php 

class Mahasiswa_model {
	private $mhs = [
		private $dbh; // database heandler->buat menampung koneksi ke database
		private $stmt // buat menyimpan query

		public function __construct() {
			
		}

	// 	[
	// 		"nama" => "Yantivia Rinwi Yumame",
	// 		"nrp" => "173040011",
	// 		"email" => "yantifia@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Rismawati",
	// 		"nrp" => "173040012",
	// 		"email" => "risma.wati266@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	],

	// 	[
	// 		"nama" => "Andika Wahyu Setiawan",
	// 		"nrp" => "173040021",
	// 		"email" => "andikawahyusetiawan@mail.unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	]
	// ];

	public function getAllMahasiswa() {
		return $this->mhs;
	}

}
