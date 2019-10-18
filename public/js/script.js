$(function() {

	$('.tombolTambahData').on('click', function() {
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer buton[type=submit]').html('Tambah Data');
	
	});


	$('.tampilModalUbah').on('click', function() {
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost:8080/tugas-rekweb-pertemuan4/public/mahasiswa/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost:8080/tugas-rekweb-pertemuan4/public/mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
			// console.log(data.nama);	
				$('#nama').val(data.nama);
				$('#nrp').val(data.nrp);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#nama').val(data.nama);
				$('#id').val(data.id);
			}
		});
	});

});