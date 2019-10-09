<?php 

	class Database {
		private $host = DB_HOST;
		private $user = DB_USER;
		private $pass = DB_PASS;
		private $db_name = DB_NAME;

		// variabel untuk koneksinya
		private $dbh;
		private $stmt;

		public function __construct() { // berisi koneksi ke database
			// data source name
			$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;// identitas server kita -> data source name

			// $option -> mengoptimasi koneksi ke database kita
			$option = [
				PDO::ATTR_PERSISTENT => true,// UNTUK MEMBUAT KONEKSI DATABASE KITA TERJAGA TERUS
				PDO::ATTR_ERRORMODE => PDO::ERRMODE_EXCEPTION
			];

			try { 
				$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
			} catch(PDOException $e) { 
				die($e->getMessage()); 
			}
		}

		public function query($query) {// buat untuk jenerik. Querynya bisa di pake apapun, baik itu select, updatde, delete, insert. Inilah tujuan membuat database Wrapper supaya bisa di pakai secara fleksibel
			$this->stmt = $this->dbh->prepare($query);
		}
	}
