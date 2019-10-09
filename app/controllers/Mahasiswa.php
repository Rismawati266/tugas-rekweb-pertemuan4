<?php 

	class Mahasiswa {
		public function index() {
			$data['judul'] = "Daftar Mahasiswa";
			$this->view('templates/header', $data);
			$this->view('mahasiswa/index');
			$this->view('templates/footer');
		}
	}
