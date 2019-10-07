<?php

	class About extends Controller {
		public function index($nama = 'Sandika', $pekerjaan = 'Dosen', $umur = 32) {
			$data['nama'] = $nama;
			$data['pekerjaan'] = $pekerjaan;
			$data['umur'] = $umur;
			$this->view('about/index', $data);

			// echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan, saya berumur $umur tahun.";
		}

		public function page() {
			$this->view('about/page');

			//echo 'About/page';
		}
	}
