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
   var madonhangchoxoa = document.getElementById("madonhangchoxoa");

   madonhangchothem.value = madonhangcho;
   madonhangchoxoa.value = madonhangcho;
}

function KhachHuyDonHangCho(madonhangcho){
   var madonhangchoxoa = document.getElementById("madonhangchoxoa");

   madonhangchoxoa.value = madonhangcho;
}