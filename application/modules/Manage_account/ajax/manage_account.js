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

$(".delete_account").click(function () {
	nav = $(this).data("val");
	id = $(this).data("id");
	account = $(this).data("value");
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
					data:{account:account},
					success: function (result) {
						swal("Akun telah dihapus!", {
							icon: "success",
						});
						update("Manage_account", "Kelola Akun");
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

$("#add_account").validate({
	rules: {
		password_confirm: {
			equalTo: "#password"
		},
		email : {
			remote: { url : "<?php echo base_url('index.php/Manage_account/email_unique')?>",
					type : "post"
			}
		}
	},
	messages: {
		password_confirm: {
			equalTo: "Password tidak cocok"
		},
		email : {
			remote: "Email telah digunakan"
		}
	},
	errorElement: "em",
	errorPlacement: function( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );

		if ( element.prop( "type" ) === "checkbox" ) {
			error.insertAfter( element.parent( "label" ) );
		} else {
			error.insertAfter( element );
		}
	}
});

$(document).ready(function () {
	$('#add_account').on('submit', function (event) {
		event.preventDefault();
		$("#add_account").validate();
		if ($("#add_account").valid()) {
			$.ajax({
				url: BASE_URL + "Manage_account/add_account",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function (data) {
					swal("Akun berhasil ditambahkan!", {
						icon: "success",
					});
					update("Manage_account", "Kelola Akun")
				},
				error: function (XMLHttpRequest, textStatus, errorThrown) {
					swal("Status: " + textStatus, "error");
					swal("Error: " + errorThrown, "error");
				},
			});
		}
	});
});
