<?php 

class Mahasiswa_model {
		// private $dbh; // database handler->buat menampung koneksi ke database
		// private $stmt; // buat menyimpan query

		public function __construct() { // koneksi ke database
			// koneksi dulu ke database
			$dsn = 'mysql:host=localhost;dbname=tugas-rekweb-pertemuan4';// identitas server kita -> data source name

			try { // kita mengecek. Apakah koneksinya berhasil atau tidak
				$this->dbh = new PDO($dsn, 'root', '');
			} catch(PDOException $e) { // jika error maka tangkap exceptionnya
				die($e->getMessage()); // kita hentikan errornya.
			}
		}


		//private $mhs = [

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
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa'); // untuk mendapatkan semua data mahasiswa
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC); // kita ambil semua datanya
	}

}
