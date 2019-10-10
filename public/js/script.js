$(function() {

	$('.tampilTtambahData').on('click', function() {
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer buton[type=submit]').html('Tambah Data');
	});

	$('.tampilModalUbah').on('click', function() {
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		//console.log('ok');
	});

});