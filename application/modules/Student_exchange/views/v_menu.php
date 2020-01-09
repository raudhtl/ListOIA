<div class="col-12 align-items-center">
  <div class = "card-body">
    <div class="row">
    <div class="col-sm-4">
      <div  class = " menu-1 text-uppercase  mb-0"  id="list" >
      <a class="menu-app-2"   data-id = "list" data-val="Student_exchange/daftar">Daftar Mahasiswa</a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class = "menu-1 text-uppercase "  id="add"  >
      <a class="menu-app-2"  data-id = "add"   data-val="Student_exchange/upload">Tambah Mahasiswa</a>
    </div>
    </div>
    <div class="col-sm-4" >
      <div class = "menu-1 text-uppercase  mb-0"   id="edit">
      <a class="menu-app-2"   data-id = "edit" data-val="Student_exchange/edit">Edit Program</a>
      </div>
    </div>
  </div>
  </br>
  <div id="container-content-2" >
    <?php echo $content?>
  </div>
  </div>

</div>

<script>

$(document).ready(function ($) {
  document.getElementById("list").style.background = "#426b9e";
  document.getElementById("list").style.color = "#fff";
  
  $(".menu-app-2").click(function () {

      nav = $(this).data("val");
      id = $(this).data("id");
      elements = document.getElementsByClassName("menu-1");
      for (var i = 0; i < elements.length; i++) {
        elements[i].style.background="#fff";
        elements[i].style.color="#426b9e";
      }
      document.getElementById(id).style.background = "#426b9e";
      document.getElementById(id).style.color = "#fff";
      console.log("update",BASE_URL+nav);

        $.ajax({
            type: "POST",
            url: BASE_URL + nav,
            success: function (data) {
          console.log("success",data);

                $("#container-content-2").html(data);
                //navText(data.nav);
            },
            error: function (data) {
          console.log("error",data);

            }
        });
      });
});
</script>
<style>
.menu-1 {
    margin:10px;
    height: 50px;
    box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
    padding-top: 8px;
    border-radius: 0.375rem;
    text-align: center;
    border-color:#b2c3ed;
    border-width:2px;
    background-color: #fff;
    border-style:solid;
    color:#426b9e;

}
</style>
