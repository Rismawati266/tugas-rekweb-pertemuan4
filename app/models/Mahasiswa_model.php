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
		$this->db->query(' SELECT * FROM ' . $this->table);
		return $this->db->resultSet(); // tampilkan semua datanya
	}

	public function getMahasiswaById($id) {
		$this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data) {
		$query = "INSERT INTO mahasiswa
					VALUES
					('', :nama, :nrp, :email, :jurusan)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataMahasiswa($id) {
		$query = "DELETE FROM mahasiswa WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

		public function ubahDataMahasiswa($data) {
		$query = "UPDATE mahasiswa SET
					nama = :nama,
					nrp = :nrp,
					email = :email,
					jurusan = :jurusan
				WHERE id = : id";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}


}