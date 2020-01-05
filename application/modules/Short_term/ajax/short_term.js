function nextTab(tab){
	$( "#form1" ).validate();
	// if ($("#form1").valid()) {
		alert("tes");
		$("#"+tab).removeClass("disabled");
		$('#'+tab).css('pointer-events', '');
		$('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
	// }
}

$( "#form1" ).validate( {
rules: {
		nama : "required",
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
messages: {
	nama: "Please enter your firstname",
	no_passport: {
		remote: "Passport id must be a unique value"
	},
	email: {
		email: "Please enter a valid email addres",
		remote: "This email address is already registered"
	}
},
errorElement: "em",
errorPlacement: function ( error, element ) {
	// Add the `help-block` class to the error element
	error.addClass( "help-block" );

	if ( element.prop( "type" ) === "checkbox" ) {
		error.insertAfter( element.parent( "label" ) );
	} else {
		error.insertAfter( element );
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
		element.style.display = 'block';
		document.getElementById("program").style.display = 'none';
		$('[name="tgl_mulai"]').val("");
		$('[name="tgl_akhir"]').val("");
		$('[name="tujuan"]').val("");
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
					$('[name="tujuan"]').val(data.tujuan);
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
	$(".nav-tabs a").click(function () {
		$(this).tab('show');
	});

	$('#sub').on('click', function (event) {
		$('#ton').val("submit");
	});


	$('#import_form').on('submit', function (event) {
		event.preventDefault();
		var empty = 1;
		if ($('#ton').val() == "submit") {
			alert("tes")
			$.ajax({
				url: BASE_URL+"Short_term/insert_excel",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					alert(data);
					document.getElementById('#myTable').style.display = "inline-block";
					document.getElementById('#file').val("");
					document.getElementById('#dokumen').val("");
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					alert("Status: " + textStatus);
					alert("Error: " + errorThrown);
				}

			});
		} else {
			alert("tes")
			$("#body").empty();
			$.ajax({
				url: BASE_URL+"Short_term/read",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					$('#file').val('');
					var sTxt = '';
					var i = 1;
					$.each(JSON.parse(data), function (i, item) {
						sTxt += '<tr>';
						sTxt += '<td>' + i + '</td>';
						$.each(this, function (k, v) {
							if (v == null || v == "WRONG FORMAT") {
								sTxt +=
									'<td class="table-danger"> </td>';
								document.getElementById('alert').style
									.display = 'block';
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
