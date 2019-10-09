<?php 

class Mahasiswa_model {
		// private $dbh; // database handler->buat menampung koneksi ke database
		// private $stmt; // buat menyimpan query

		// public function __construct() { // koneksi ke database
		// 	// koneksi dulu ke database
		// 	$dsn = 'mysql:host=localhost;dbname=tugas-rekweb-pertemuan4';// identitas server kita -> data source name

		// 	try { // kita mengecek. Apakah koneksinya berhasil atau tidak
		// 		$this->dbh = new PDO($dsn, 'root', '');
		// 	} catch(PDOException $e) { // jika error maka tangkap exceptionnya
		// 		die($e->getMessage()); // kita hentikan errornya.
		// 	}
		// }


	public function getAllMahasiswa() {
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa'); // untuk mendapatkan semua data mahasiswa
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC); // kita ambil semua datanya
	}

}
