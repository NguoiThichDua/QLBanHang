function ThayDoiCongNo(madonhang,congno){

    var madonhangsuacongno = document.getElementById("madonhangsuacongno");
    var congnosua = document.getElementById("congnosua")

    madonhangsuacongno.value = madonhang;
    congnosua.value = congno;
}

function TimTenKhachHang(){
    $(document).ready(function(e) {
        var tenkhach = document.getElementById("tenkhachhangtim").value.trim();

        $("#loctheodieukien").load("view/component/quanli/donhangcuakhach/loc.php" , {tenkhach: tenkhach});
      
   });
}