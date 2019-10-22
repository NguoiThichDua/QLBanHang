
$(document).ready(function(e) {
	// dung ca trang ca nhan, goi form sua tai khoan ma khong can load trang
	$(".suathongtin").click(function(){
		// lay ten khach hang  de thay doi thong tin tai suakhachhang.php
		var hotenkhachhang = document.getElementById("hotenkhachhang").innerHTML;
        $("#suathongtincanhan").load("view/component/khachhang/canhan/suathongtincanhan.php" , {hotenkhachhang: hotenkhachhang});
		
	});

	$(".duyetdonhangcho").click(function(){
		var madonhangcho = $(this).children("td:nth-child(2)").html();
		$("#hanghoagia").load("view/component/quanli/donhangcuakhach/tenhangvagia.php" , {madonhangcho: madonhangcho});

	});
});