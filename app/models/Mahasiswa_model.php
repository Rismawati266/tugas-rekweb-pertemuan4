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

	private $table = 'mahasiswa';
	private $db;

	public function __construct () {
		$this->db = new Database; // lalu kita simpan variabel yang menampung kelas database tadi
	}


	public function getAllMahasiswa() {
		$this->db->query(' SELECT * FROM ' . $tis->table);
		return $this->db->resultSet(); // tampilkan semua datanya
	}

}
