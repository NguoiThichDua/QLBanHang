function XoaKhachHang(makhachhang, tenkhachhang){
    makhachhangxoa = document.getElementById("makhachhangxoa");
    tenkhachhangxoa = document.getElementById("tenkhachhangxoa");

    makhachhangxoa.value = makhachhang;
    tenkhachhangxoa.value = tenkhachhang;
}

function SuaKhachHang(makhachhang, tentaikhoan, matkhau, hoten, sodienthoai, diachi){
    makhachhangsua = document.getElementById("makhachhangsua");
    tentaikhoansua = document.getElementById("tentaikhoansua");
    matkhausua = document.getElementById("matkhausua");
    hotensua = document.getElementById("hotensua");
    sodienthoaisua = document.getElementById("sodienthoaisua");
    diachisua = document.getElementById("diachisua");

    makhachhangsua.value = makhachhang;
    tentaikhoansua.value = tentaikhoan;
    matkhausua.value = matkhau;
    hotensua.value = hoten;
    sodienthoaisua.value = sodienthoai;
    diachisua.value = diachi;
}