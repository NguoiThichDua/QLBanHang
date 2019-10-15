function SuaHangHoa(mahanghoa, tenhanghoa, gia){
   var mahanghoasua = document.getElementById("mahanghoasua");
   var tenhanghoasua = document.getElementById("tenhanghoasua");
   var giahanghoasua = document.getElementById("giahanghoasua");

   mahanghoasua.value = mahanghoa;
   tenhanghoasua.value = tenhanghoa;
   giahanghoasua.value = gia;
}

function XoaHangHoa(mahanghoa, tenhanghoa){
    var mahanghoaxoa = document.getElementById("mahanghoaxoa");
    var tenhanghoaxoa = document.getElementById("tenhanghoaxoa");
 
    mahanghoaxoa.value = mahanghoa;
    tenhanghoaxoa.value = tenhanghoa;
}

function ThemHangHoa(){
   var themmahanghoacho = document.getElementById("themmahanghoacho");
   var soluongthemhangcho = document.getElementById("soluongthemhangcho");

   // var btn = document.createElement("span");
   // btn.innerHTML = "<input class='form-control' type='text' value='"+themmahanghoacho.innerHTML +" - Số lượng: "+soluongthemhangcho.value+ "' >"
   // xemhangdat.appendChild(btn);

  //alert("asad");
}