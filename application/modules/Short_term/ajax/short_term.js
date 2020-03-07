function nextTab(tab) {
	// $("#form1").validate();
	// if ($("#form1").valid()) {
		$("#"+tab).removeClass("disabled");
		$('#'+tab).css('pointer-events', '');
		$('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
	// }
}

function download_doc(doc){
	alert(doc)
	$.ajax({
		url: BASE_URL+"Short_term/download_doc",
		method: "POST",
		data: {doc : doc},
		contentType: false,
		cache: false,
		processData: false,
		success: function(data) {

		},
		error: function (XMLHttpRequest, textStatus, errorThrown) {
			swal("Terjadi kesalahan", "Status: " + textStatus, "error");
			swal("Terjadi kesalahan", "Error: " + errorThrown), "error";
		},
	});
}

function prevTab(tab) {
	$('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
}

function CheckProgram(val) {
	var element = document.getElementById('edit_program');
	if (val == 'others') {
		$('#edit_program').attr('name', 'program');
		$('#program').attr('name', 'p');
		$('#edit_program').prop('required', true);
		element.style.display = 'block';
		document.getElementById("program").style.display = 'none';
		$('[name="tujuan_kunjungan"]').val("");
		$('#tujuan_kunjungan').prop('disabled', false);
		$('[name="jenis_program"]').val("");
		$('#jenis_program').prop('disabled', false);
		$('[name="tahun"]').val("");
		$('#tahun').prop('disabled', false);
		$('[name="semester"]').val("");
		$('#semester').prop('disabled', false);
		$('[name="tgl_mulai"]').val("");
		$('#tgl_mulai').prop('disabled', false);
		$('[name="tgl_akhir"]').val("");
		$('#tgl_akhir').prop('disabled', false);
	} else {
		$('#tujuan_kunjungan').prop('disabled', true);
		$('#jenis_program').prop('disabled', true);
		$('#tahun').prop('disabled', true);
		$('#semester').prop('disabled', true);
		$('#tgl_mulai').prop('disabled', true);
		$('#tgl_akhir').prop('disabled', true);
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('index.php/Short_term/get_program')?>",
			dataType: "JSON",
			data: {
				nama: val
			},
			cache: false,
			success: function (data) {
				$.each(data, function (id, nama, tujuan, tgl_mulai, tgl_akhir) {
					$('[name="tgl_mulai"]').val(data.tgl_mulai);
					$('[name="tgl_akhir"]').val(data.tgl_akhir);
					$('[name="tujuan_kunjungan"]').val(data.tujuan);
					$('[name="jenis_program"]').val(data.jenis);
					$('[name="tahun"]').val(data.tahun);
					$('[name="semester"]').val(data.semester);
				});
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus);
				alert("Error: " + errorThrown);
			}
		});
		return false;
		element.style.display = 'none';
		document.getElementById("program").style.display = 'block';
	}
}
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
						update("Short_term/list", "Short_term");
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
	$('#form_st_update').on('submit', function (event) {
		event.preventDefault();
		$.ajax({
			url: BASE_URL+"Short_term/update_mhs",
			method: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				var str = data.replace(/\"/g,"");
				if (str == "Data berhasil diperbaharui"){
					swal("Berhasil", str, "success");
					update("Short_term/list")
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
	$('#form1').on('submit', function (event) {
		event.preventDefault();
		$.ajax({
			url: BASE_URL+"Short_term/input",
			method: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				var str = data.replace(/\"/g,"");;
				if (str == "Data berhasil dimasukkan"){
					swal("Berhasil", str, "success");
					update("Short_term")
				} else {
					swal("Terjadi Kesalahan", str, "error");
					$('#ton').val("preview");
					$('#sub').prop('disabled', true);
					alert.innerHTML = '<strong>'+str+'</strong>';
				}
    	},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				swal("Status: " + textStatus, "erro");
				swal("Error: " + errorThrown, "error");
			},
		});
	});
	$('#form2').on('submit', function (event) {
		event.preventDefault();
		$.ajax({
			url: BASE_URL+"Short_term/input2",
			method: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				var str = data.replace(/\"/g,"");;
				if (str == "Data berhasil dimasukkan"){
					swal("Berhasil", str, "success");
					update("Short_term/list")
				} else {
					swal("Terjadi Kesalahan", str, "error");
					$('#ton').val("preview");
					$('#sub').prop('disabled', true);
					alert.innerHTML = '<strong>'+str+'</strong>';
				}
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				swal("Status: " + textStatus, "erro");
				swal("Error: " + errorThrown, "error");
			},
		});
	});
	$('#form').on('submit', function (event) {
		event.preventDefault();
		$.ajax({
			url: BASE_URL+"Short_term/update",
			method: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				var str = data.replace(/\"/g,"");
				// alert(str);
				swal("Berhasil", str, "success");
				update("Short_term");	
    	},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus, "error");
				alert("Error: " + errorThrown), "error";
			},
		});
	});


	$(".nav-tabs a").click(function () {
		$(this).tab('show');
	});

	$('#sub').on('click', function (event) {
		$('#ton').val("submit");
	});

	$(".menu-edit").click(function () {
		nav = $(this).data("val");
		id = $(this).data("id");
		program = $(this).data("value");
		console.log("update", BASE_URL + nav);
		$.ajax({
			type: "POST",
			url: BASE_URL + nav,
			data:{program:program},
			success: function (result) {
				console.log("success", result);
	
				$("#container-content").html(result);
				CheckProgram(program);
				//navText(data.nav);
			},
			error: function (result) {
				console.log("error", result);
	
			}
		});
	});
	$( "#file" ).change(function() {
		$('#sub').prop('disabled', true);
		$('#ton').val("preview");
	});
	$( "#dokumen" ).change(function() {
		$('#sub').prop('disabled', true);
		$('#ton').val("preview");
	});
	$('#import_form').on('submit', function (event) {
		document.getElementById('#alert').style.display = 'none';
		event.preventDefault();
		var empty = 1;
		if ($('#ton').val() == "submit") {
			$.ajax({
				url: BASE_URL + "Short_term/insert_excel",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					swal("Data berhasil ditambahkan", "succes")
					document.getElementById('#myTable').style.display = "none";
					$('#ton').val("preview");
					$('#sub').prop('disabled', true);
					$('#file').val("");
					$('#dokumen').val("");

				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					alert("Status: " + textStatus, "error");
					alert("Error: " + errorThrown, "error");
				}
			});
		} else {
			$("#body").empty();
			$.ajax({
				url: BASE_URL + "Short_term/read",
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
			url: "<?php echo base_url('index.php/Short_term/get_mhs')?>",
			dataType: "JSON",
			data: {
				id: val
			},
			cache: false,
			success: function (data) {
				$.each(data, function (id, nama, email, no_passport, fakultas_asal, jurusan_asal, id_program, universitas_asal, negara_tujuan, tujuan_kunjungan, universitas_tujuan, negara_asal, nama_program, jenis_program, tahun, semester, tgl_mulai, tgl_akhir) {
					$('[name="id_mhs"]').val(data.id);
					$('[name="nama"]').val(data.nama);
					$('[name="email"]').val(data.email);
					$('[name="id_program"]').val(data.id_program);
					$('[name="no_passport"]').val(data.no_passport);
					$('[name="fakultas_asal"]').val(data.fakultas_asal);
					$('[name="jurusan_asal"]').val(data.jurusan_asal);
					$('[name="univ_asal"]').val(data.universitas_asal)
					$('[name="negara_tujuan"]').val(data.negara_tujuan);
					$('[name="univ_tujuan"]').val(data.universitas_tujuan);
					$('[name="negara_asal"]').val(data.negara_asal);
					$('[name="program"]').val(data.nama_program);
					$('[name="jenis_program"]').val(data.jenis_program);
					$('[name="tahun"]').val(data.tahun);
					$('[name="tujuan"]').val(data.tujuan_kunjungan);
					$('[name="semester"]').val(data.semester);
					$('[name="tgl_mulai"]').val(data.tgl_mulai);
					$('[name="tgl_akhir"]').val(data.tgl_akhir);
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
