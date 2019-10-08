<?php 

	class Home extends Controller {
		public function index() {
			$data['judul'] = 'Home';
			$this->view('templates/header', $data);
			$this->view('home/index'); // datanya tidak ada
			$this->view('templates/footer');

		}
	}