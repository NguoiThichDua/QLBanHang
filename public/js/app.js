/* Sử dụng cho thông báo alert - Khi ấn phím bất kì thì thông báo với id alert sẽ biến mất */
window.onkeypress = function(){
    var alertSuccess = document.getElementById("message");

    if(alertSuccess != null){
        alertSuccess.style.display = 'none';
    }
}