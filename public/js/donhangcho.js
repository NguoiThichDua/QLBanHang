function ThayDoiSoLuongHang( macthh, madonhangcho,soluong){
   var macthhsua = document.getElementById("macthhsua");
   var madonhangchosua = document.getElementById("madonhangchosua");
   var soluongmacdinh = document.getElementById("soluongmacdinh");

   macthhsua.value = macthh;
   madonhangchosua.value = madonhangcho;
   soluongmacdinh.value = soluong;
}

function LayMaDonHangCho(madonhangcho){
   var madonhangchothem = document.getElementById("madonhangchothem");
   madonhangchothem.value = madonhangcho;
}