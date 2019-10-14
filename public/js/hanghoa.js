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