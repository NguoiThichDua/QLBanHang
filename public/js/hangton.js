$(document).ready(function(e) {
	// loc hang ton theo thang
	$(".lochangtontheothang").click(function(){
        var thang = document.getElementById("hangtonthang").value;
        
        $("#lochangtontheothang").load("view/component/khachhang/quanlihangton/loctheothang.php" , {thang: thang});
	});
});

function BindinSoLuong(soluongmacdinh, machitiethangton){
    var soluongmacdinhsua = document.getElementById("soluongmacdinh");
    var machitiethangtonsua = document.getElementById("machitiethangton");

    soluongmacdinhsua.value =  soluongmacdinh;
    machitiethangtonsua.value = machitiethangton;
}


