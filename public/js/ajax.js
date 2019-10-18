// JavaScript Document
$(document).ready(function(e) {
	//Hàng hóa
	 $(".suathongtin").click(function(){
        var hotenkhachhang = document.getElementById("hotenkhachhang").innerHTML;
        var diachikhachhang = document.getElementById("diachikhachhang").innerHTML;
        var sodienthoaikhachhang = document.getElementById("sodienthoaikhachhang").innerHTML;
        
       
        $("#suathongtincanhan").load("view/component/khachhang/suathongtincanhan.php" , {hotenkhachhang: hotenkhachhang});
	});
	
});