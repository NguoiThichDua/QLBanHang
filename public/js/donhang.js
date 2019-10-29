function ThayDoiCongNo(madonhang,congno){

    var madonhangsuacongno = document.getElementById("madonhangsuacongno");
    var congnosua = document.getElementById("congnosua")

    madonhangsuacongno.value = madonhang;
    congnosua.value = congno;
}

function TimTenKhachHang(){
    $(document).ready(function(e) {
        var tenkhach = document.getElementById("tenkhachhangtim").value.trim();
        var sodienthoai = document.getElementById("sodienthoaikhachhangtim").value.trim();

        var ngaybatdautim = document.getElementById("ngaybatdautim").value;
        var ngayketthuctim = document.getElementById("ngayketthuctim").value;
      
        $("#loc").load("view/component/quanli/donhangcuakhach/xuatkho/banglochangton.php" , {tenkhach: tenkhach, sodienthoai: sodienthoai, ngaybatdautim: ngaybatdautim, ngayketthuctim: ngayketthuctim});
      
   });
}

function LocTheoCongNo(){
    $(document).ready(function(e) {
        var tenkhachhangtimcongno = document.getElementById("tenkhachhangtimcongno").value.trim();
        var sodienthoaikhachhangtimcongno = document.getElementById("sodienthoaikhachhangtimcongno").value.trim();

        var ngaybatdautimcongno = document.getElementById("ngaybatdautimcongno").value;
        var ngayketthuctimcongno = document.getElementById("ngayketthuctimcongno").value;

        $("#loc").load("view/component/quanli/donhangcuakhach/xuatkho/bangloccongno.php" , {tenkhachhangtimcongno: tenkhachhangtimcongno, sodienthoaikhachhangtimcongno: sodienthoaikhachhangtimcongno, ngaybatdautimcongno: ngaybatdautimcongno, ngayketthuctimcongno: ngayketthuctimcongno});
      
   });
}

function LayMaKhach(){
    var makhachnhap = document.getElementById("makhachnhap");

    var makhachxacnhan = document.getElementById("makhachtaodonhang");

    makhachxacnhan.value = makhachnhap.value;
}

function chektaikhoanthemdonhang(){
    /* Xử dụng Ajax để load thông tin email đã được sử dụng chưa ngay và luôn */
    $(document).ready(function(e) {
        var tentaikhoan = document.getElementById("makhachnhap").value.trim();

        /* #ShowCheckEmailDangKi sẻ load dữ liệu được xử lí ở file checkEmail.php */
        $("#showtentaikhoandangkii").load("view/component/quanli/donhangcuakhach/taodonhangchokhach/checkthemdonhang.php" , {tentaikhoan: tentaikhoan});
       
   });
}