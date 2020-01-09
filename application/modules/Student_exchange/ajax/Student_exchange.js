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

$(document).ready(function () {
	$('#form_se').on('submit', function (event) {
		event.preventDefault();
		$.ajax({
			url: BASE_URL+"Student_exchange/input",
			method: "POST",
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(data) {
				var str = data.replace(/\"/g,"");
				alert(str);
				if (str == "Data berhasil dimasukkan"){
					alert(str)
					update("Student_exchange")
				} else {
					document.getElementById('#alert2').style.display = 'block';
					$('#msg').html('<strong>'+str+'</strong>');
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
