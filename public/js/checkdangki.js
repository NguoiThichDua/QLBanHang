function checktentaikhoandangki(){
    /* Xử dụng Ajax để load thông tin email đã được sử dụng chưa ngay và luôn */
    $(document).ready(function(e) {
        var tentaikhoan = document.getElementById("tentaikhoandangki").value.trim();

        /* #ShowCheckEmailDangKi sẻ load dữ liệu được xử lí ở file checkEmail.php */
        $("#showtentaikhoandangki").load("view/component/dangki/checkdangki.php" , {tentaikhoan: tentaikhoan});
       
   });
}


function checkmatkhau(){
    var MatKhauDangKi = document.getElementById("matkhaudangki").value.trim() + "";
    var DoDaiMatKhauDangKi = document.getElementById("dodaimatkhaudangki");

    var dodai = MatKhauDangKi.length;

    if(MatKhauDangKi.length <= 5){
        DoDaiMatKhauDangKi.innerHTML = "<small><b>Độ dài: " + dodai + " <span style='color:red'> (yếu)</span></b><small>";
    }else if(MatKhauDangKi.length > 5 && MatKhauDangKi.length <= 10){
        DoDaiMatKhauDangKi.innerHTML = "<small><b>Độ dài: " + dodai + " <span style='color:orange'> (vừa)</span></b><small>";
    }else if(MatKhauDangKi.length > 10){
        DoDaiMatKhauDangKi.innerHTML = "<small><b>Độ dài: " + dodai + " <span style='color:MediumSeaGreen'> (mạnh)</span></b><small>";
    }
}

function checknhaplaimatkhau(){
  
    var MatKhauDangKi = document.getElementById("matkhaudangki").value.trim() + "";
    var MatKhauNhapLai = document.getElementById("matkhaunhaplai").value.trim() + "";
    
    var CheckGiongNhau = document.getElementById("showmatkhaunhaplai");

    if(MatKhauNhapLai.length <= 0){
        CheckGiongNhau.innerHTML = "<small style='color:red'><b>Mật khẩu không trùng</b></small>";
    }else if(MatKhauDangKi != MatKhauNhapLai){
        CheckGiongNhau.innerHTML = "<small style='color:red'><b>Mật khẩu không trùng</b></small>";
    }else{
        CheckGiongNhau.innerHTML = "<small style='color:MediumSeaGreen'><b>OK...!</b></small>";
    } 
}

function checksodienthoai(){
    $(document).ready(function(e) {
        var sodienthoai = document.getElementById("sodienthoaidangki").value.trim();

        $("#showsodienthoaidangki").load("view/component/dangki/checkdangki.php" , {sodienthoai: sodienthoai});
       
   });
}


function showpassdangki(){
    var pass = document.getElementById('matkhaunhaplai');
    if(pass.type == "password"){
        pass.type = "text";
    }else{
        pass.type = "password"
    }
}

function showpassdangnhap(){
    var pass = document.getElementById('matkhaudangnhap');
    if(pass.type == "password"){
        pass.type = "text";
    }else{
        pass.type = "password"
    }
}
