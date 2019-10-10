$(function() {

	$('.tampilTtambahData').on('click', function() {
		$('#formModalLabel').html('Tambah Data Mahasiswa');
	});

	$('.tampilModalUbah').on('click', function() {
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		console.log('ok');
	})

});