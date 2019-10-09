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
				$dsn = 'mysql:host=localhost;dbname=tugas-rekweb-pertemuan4';// identitas server kita -> data source name

				try { 
					$this->dbh = new PDO($dsn, 'root', '');
				} catch(PDOException $e) { 
					die($e->getMessage()); 
				}
		}
	}
