
$(document).ready(function(e) {
	// dung ca trang ca nhan, goi form sua tai khoan ma khong can load trang
	$(".suathongtin").click(function(){
		var hotenkhachhang = document.getElementById("hotenkhachhang");
        $("#suathongtincanhan").load("view/component/khachhang/suathongtincanhan.php" , {hotenkhachhang: hotenkhachhang});
	});
});