function nextTab(tab) {
	$("#form1").validate();
	if ($("#form1").valid()) {
		$("#"+tab).removeClass("disabled");
		$('#'+tab).css('pointer-events', '');
		$('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
	}
}

function prevTab(tab) {
	$('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
}
$( "#file" ).change(function() {
	$('#sub').prop('disabled', true);
	$('#ton').val("preview");
});
$( "#dokumen" ).change(function() {
	$('#sub').prop('disabled', true);
	$('#ton').val("preview");
});
$(document).ready(function () {
	$(".mhs-edit").click(function (event) {
		event.preventDefault();
		nav = $(this).data("val");
		mhs = $(this).data("value");
		console.log("update", BASE_URL + nav);
		$.ajax({
			method: "POST",
			url: BASE_URL + nav,
			data:{mhs:mhs},
			success: function (result) {
				$("#container-content").html(result);
				CheckMhs(mhs);
				//navText(data.nav);
			},
			error: function (result) {
				alert("error", result);

			}
		});
	});
	$('#form_se').on('submit', function (event) {
		event.preventDefault();
		$.ajax({
			url: BASE_URL+"Student_exchange/input2",
			method: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				var str = data.replace(/\"/g,"");
				
				if (str == "Data berhasil dimasukkan"){
                    swal(str, "success");
					update("Student_exchange")
				} else {
					document.getElementById('#alert2').style.display = 'block';
					alert = document.getElementById('#msg');
					alert.innerHTML = '<strong>'+str+'</strong>';
				}
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus, "error");
				alert("Error: " + errorThrown, "error");
			},
		});
	});

	$(".mhs-delete").click(function () {
		alert("halo")
		nav = $(this).data("val");
		doc =  $(this).data("doc");
		id = $(this).data("id");
		id_mhs= $(this).data("value");
		id_program= $(this).data("program");
		swal({
			title: 'Apakah Anda yakin ingin menghapus akun ini?',
			text: "Akun yang telah terhapus tidak bisa dikembalikan!",
			icon: 'warning',
			buttons: true,
			dangerMode: true,
		}).then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type: "POST",
					url: BASE_URL + nav,
					data:{id_mhs:id_mhs, id_program:id_program, document:doc},
					success: function (result) {
						swal("Data telah dihapus!", {
							icon: "success",
						});
						update("Student_exchange", "Student_exchange");
					},
					error: function (XMLHttpRequest, textStatus, errorThrown) {
						swal("Terjadi kesalahan", {
							icon: "error",
						});
					}
				});

			}
		})
	});

	$('#form_se_update').on('submit', function (event) {
		event.preventDefault();
		$.ajax({
			url: BASE_URL+"Student_exchange/update_mhs",
			method: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				var str = data.replace(/\"/g,"");
				if (str == "Data berhasil diperbaharui"){
					swal(str, "success");
					update("Student_exchange")
				} else {
					document.getElementById('#alert2').style.display = 'block';
					alert = document.getElementById('#msg');
					alert.innerHTML = '<strong>'+str+'</strong>';
				}
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus, "error");
				alert("Error: " + errorThrown, "error");
			},
		});
	});
	$(".nav-tabs a").click(function () {
		$(this).tab('show');
	});

	$('#sub').on('click', function (event) {
		$('#ton').val("submit");
	});

	$('#import_form').on('submit', function (event) {
		document.getElementById('#alert').style.display = 'none';
		event.preventDefault();
		var empty = 1;
		if ($('#ton').val() == "submit") {
			document.getElementById('#alert_excel').style.display = 'none';
			$.ajax({
				url: BASE_URL + "Student_exchange/insert_excel",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					var str = data.replace(/\"/g,"");
					if (str == "Data berhasil dimasukkan"){
						swal(str, "success");
						update("Student_exchange")
					} else {
						swal("Terjadi Kesalahan", str, "error");
						$('#ton').val("preview");
						$('#sub').prop('disabled', true);
						alert.innerHTML = '<strong>'+str+'</strong>';
					}


				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					alert("Status: " + textStatus, "error");
					alert("Error: " + errorThrown, "error");
				}

			});
		} else {
			$("#body").empty();
			$.ajax({
				url: BASE_URL + "Student_exchange/read",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					var sTxt = '';
					var i = 1;
					$.each(JSON.parse(data), function (i, item) {
						sTxt += '<tr>';
						sTxt += '<td>' + i + '</td>';
						$.each(this, function (k, v) {
							if (v == null || v == "WRONG FORMAT") {
								sTxt += '<td class="table-danger"> ' +v+' </td>';
								document.getElementById('#alert').style.display = 'inline-block';
								empty = 2;
							} else {
								sTxt += '<td>' + v + '</td>';
							}
						});
						sTxt += '</tr>';
						i = i + 1;
					});
					$('#body').append(sTxt);
					document.getElementById('#myTable').style.display = "inline-block";
					if (empty == 1) {
						$('#sub').prop('disabled', false);
					}

				},
			});
		}
	});

});

function CheckMhs(val) {
	if (val == 'others') {
		$('#edit_program').attr('name', 'program');
		$('#program').attr('name', 'p');
		$('#edit_program').prop('required', true);
		element.style.display = 'block';
		document.getElementById("program").style.display = 'none';
		$('[name="tgl_mulai"]').val("");
		$('[name="tgl_akhir"]').val("");
		$('[name="tujuan_kunjungan"]').val("");
		$('[name="jenis_program"]').val("");
		$('[name="tahun"]').val("");
	} else {
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('index.php/Student_exchange/get_mhs')?>",
			dataType: "JSON",
			data: {
				id: val
			},
			cache: false,
			success: function (data) {
				$.each(data, function (id, nama, email, no_passport, fakultas_asal, jurusan_asal, id_program, universitas_asal, negara_tujuan, fakultas_tujuan, jurusan_tujuan, universitas_tujuan, negara_asal, nama_program, jenis_program, tahun, semester, tgl_mulai, tgl_akhir) {
					$('[name="id"]').val(data.id);
					$('[name="nama"]').val(data.nama);
					$('[name="email"]').val(data.email);
					$('[name="id_program"]').val(data.id_program);
					$('[name="no_passport"]').val(data.no_passport);
					$('[name="fakultas_asal"]').val(data.fakultas_asal);
					$('[name="jurusan_asal"]').val(data.jurusan_asal);
					$('[name="univ_asal"]').val(data.universitas_asal)
					$('[name="negara_tujuan"]').val(data.negara_tujuan);
					$('[name="fakultas_tujuan"]').val(data.fakultas_tujuan);
					$('[name="jurusan_tujuan"]').val(data.jurusan_tujuan);
					$('[name="univ_tujuan"]').val(data.universitas_tujuan);
					$('[name="negara_asal"]').val(data.negara_asal);
					$('[name="nama_program"]').val(data.nama_program);
					$('[name="jenis_program"]').val(data.jenis_program);
					$('[name="tahun"]').val(data.tahun);
					$('[name="semester"]').val(data.semester);
					$('[name="tgl_mulai"]').val(data.tgl_mulai);
					$('[name="tgl_akhirm"]').val(data.tgl_akhir);
				});
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus);
				alert("Error: " + errorThrown);
			}
		});
		return false;
	}
}