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
	console.log("update", BASE_URL + nav);
	$.ajax({
		type: "POST",
		url: BASE_URL + nav,
		data:{program:program},
		success: function (result) {
			console.log("success", result);
			$("#container-content").html(result);
		},
		error: function (result) {
			console.log("error", result);

		}
	});
});
