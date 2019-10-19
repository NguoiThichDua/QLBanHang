
$(document).ready(function(e) {
	// dung ca trang ca nhan, goi form sua tai khoan ma khong can load trang
	$(".suathongtin").click(function(){
		// lay ten khach hang  de thay doi thong tin tai suakhachhang.php
		var hotenkhachhang = document.getElementById("hotenkhachhang").innerHTML;
        $("#suathongtincanhan").load("view/component/khachhang/suathongtincanhan.php" , {hotenkhachhang: hotenkhachhang});
		
	});

	$(".duyetdonhangcho").click(function(){
		
	});
});