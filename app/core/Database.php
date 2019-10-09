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

		public function bind($param, $value, $type = null) {
			if( is_null($type) ) {
				switch ( true ) { // SUPAYA SWITCHNYA JALAN
					case is_int($value): // VALUENYA INTEGER
						$type = PDO::PARAM_INT;
						break;
					case is_bool($value): // VALUENYA BOOLEAN
						$type = PDO::PARAM_BOOL;
						break;
					case is_null($value): // VALUENYA NULL
						$type = PDO::PARAM_NULL;
						break;
					default : // selain dari itu typenya kita asumsikan String
						$type = PDO::PARAM_STR;
				}
			}

			$this->stmt->bindValue($param, $value, $type);
		}

		public function execute() { // eksekusi
			$this->stmt->execute();
		}

		public function resultSet() {
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_ASSOC); // jika ingin banyak datanya
		}



	}
