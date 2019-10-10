$(function() {

	$('.tampilTtambahData').on('click', function() {
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer buton[type=submit]').html('Tambah Data');
	});

	$('.tampilModalUbah').on('click', function() {
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/tugas-rekweb-pertemuan4/mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			
			success: function(data) {
				console.log(data);

			}
		});
	});

});