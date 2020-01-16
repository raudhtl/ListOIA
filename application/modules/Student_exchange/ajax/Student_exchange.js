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
				swal(str, "success");
				if (str == "Data berhasil dimasukkan"){
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
			$.ajax({
				url: BASE_URL + "Student_Exchange/insert_excel",
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
						document.getElementById('#alert_excel').style.display = 'block';
						alert = document.getElementById('#msg_excel');
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
				url: BASE_URL + "Student_Exchange/read",
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
