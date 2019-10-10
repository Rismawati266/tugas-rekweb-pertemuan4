$(function() {

	$('.tampilTtambahData').on('click', function() {
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer buton[type=submit]').html('Tambah Data');
		$('.modal-body form').attr('action', 'http://localhost:8080/tugas-rekweb-pertemuan4/public/mahasiswa/ubah')
	});


	$('.tampilModalUbah').on('click', function() {
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost:8080/tugas-rekweb-pertemuan4/public/mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			
			success: function(data) {

				$('#nama').val(data.nama);
				$('#nrp').val(data.nrp);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);

			}
		});
	});

});