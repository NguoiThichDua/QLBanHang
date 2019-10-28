/* Sử dụng cho thông báo alert - Khi ấn phím bất kì thì thông báo với id alert sẽ biến mất */
window.onkeypress = function(event){
    if(event.keyCode == 32){   
        var alertSuccess = document.getElementById("message");

        if(alertSuccess != null){
            alertSuccess.style.display = 'none';
        }
      
    }else{
        
    }
    
}

window.onload = function()
{
    document.getElementById("thongtincanhandangki").style.display = "none";
};
