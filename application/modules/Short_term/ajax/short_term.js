function nextTab(tab) {
	$("#form1").validate();
	// if ($("#form1").valid()) {
		$("#"+tab).removeClass("disabled");
		$('#'+tab).css('pointer-events', '');
		$('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
	// }
}

$("#form1").validate({
	rules: {
		nama: "required",
		tgl_lahir: "required",
		no_passport: {
			remote: { url : "<?php echo base_url('index.php/Short_term/check_passport')?>",
								type : "post"
							}
		},
		email: {
			remote: { url : "<?php echo base_url('index.php/Short_term/check_email')?>",
								type : "post"
							}
		},
		jurusan_asal: "required",
		fakultas_asal: "required",
		negara_asal: "required",
		univ_asal: "required",
		univ_tujuan: "required",
		negara_tujuan: "required"
},
errorElement: "em",
errorPlacement: function ( error, element ) {
	// Add the `help-block` class to the error element
	error.addClass( "help-block" );

		if (element.prop("type") === "checkbox") {
			error.insertAfter(element.parent("label"));
		} else {
			error.insertAfter(element);
		}
	}
});

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
		$('[name="tgl_mulai"]').val("");
		$('[name="tgl_akhir"]').val("");
		$('[name="tujuan_kunjungan"]').val("");
		$('[name="jenis_program"]').val("");
		$('[name="tahun"]').val("");
	} else {
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
					alert(str)
					update("Short_term")
				} else {
					document.getElementById('#alert').style.display = 'block';
					$('#body').append(str);
				}
    	},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus);
				alert("Error: " + errorThrown);
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

				$("#container-content-2").html(result);
				CheckProgram(program);
				//navText(data.nav);
			},
			error: function (result) {
				console.log("error", result);

			}
		});
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
					alert("Berhasil")
					document.getElementById('#myTable').style.display = "none";
					$('#ton').val("preview");
					$('#sub').prop('disabled', true);
					$('#file').val("");
					$('#dokumen').val("");

				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					alert("Status: " + textStatus);
					alert("Error: " + errorThrown);
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
