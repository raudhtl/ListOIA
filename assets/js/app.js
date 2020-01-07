$(document).ready(function ($) {
    //set landing dashboard di menu dashboard


    /* TODO function belum diimplementasi
     * function untuk action class menu-app
     * class menu-app memiliki attribute data-val untuk setiap controllers dan fungsididalamnya
     * update content-page dan nav-text setiap class menu-app diklik
     * */
    $(".menu-app").click(function () {
        $("#grupmenu a").removeClass('active');
        $(this).addClass('active');
        nav = $(this).data("val");
        update(nav);
    });
});



/*
 * Function untuk melakukan update pada content-page dan nav-text
 * @param z nama controller dan function yang akan dipanggil
 * @return data json
 *   page => halaman html,
 *   nav => nama controller dan function
 *   val => nama kategori
 * */
function update(z) {
    nav = z;
    console.log("update", BASE_URL + z);

    $.ajax({
        type: "POST",
        url: BASE_URL + z,
        success: process,
        error: function (data) {
            console.log("error", data);

        }
    });
}

function process(htmlfile){
    console.log("success", htmlfile);
    $("#container-content").html(htmlfile);
}
