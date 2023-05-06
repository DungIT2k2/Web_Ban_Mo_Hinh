var btn_update = document.getElementById("btn_update");
//QLSP
var cb_add_qlsp = document.getElementsByName("Add_QLSP");
var cb_delete_qlsp = document.getElementsByName("Delete_QLSP");
var cb_update_qlsp = document.getElementsByName("Update_QLSP");
//QLDH
var cb_add_qldh = document.getElementsByName("Add_QLDH");
var cb_delete_qldh = document.getElementsByName("Delete_QLDH");
var cb_update_qldh = document.getElementsByName("Update_QLDH");
//QLUSer
var cb_add_qluser = document.getElementsByName("Add_QLUser");
var cb_delete_qluser = document.getElementsByName("Delete_QLUser");
var cb_update_qluser = document.getElementsByName("Update_QLUser");
var cb_see_qluser = document.getElementsByName("See_QLUser");
//QLDT
var cb_see_qldt = document.getElementsByName("See_QLDT");
var isChecked;

function Update_cb(cb,i,dq,kv){
    isChecked = cb.checked;
    //Gửi dữ liệu lên bằng Ajax
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Update_QuyenUser.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            console.log(response);  
        }
    };
    var data = "isChecked=" + (isChecked ? "1" : "0")+"&idq=" + i + "&dacquyen=" + dq + "&kv=" + kv;
    xhr.send(data);
}
btn_update.onclick = function(){
    var temp;
    //QLSP
    for(var i=0; i<cb_add_qlsp.length;i++){
        temp = i+1;
        Update_cb(cb_add_qlsp[i], temp, "Them", "QLSP");
    }
    for(var i=0; i<cb_delete_qlsp.length;i++){
        temp = i+1;
        Update_cb(cb_delete_qlsp[i], temp, "Xoa", "QLSP");
    }
    for(var i=0; i<cb_update_qlsp.length;i++){
        temp = i+1;
        Update_cb(cb_update_qlsp[i], temp, "Sua", "QLSP");
    }
    //QLDH
    for(var i=0; i<cb_add_qldh.length;i++){
        temp = i+1;
        Update_cb(cb_add_qldh[i], temp, "Them", "QLDH");
    }
    for(var i=0; i<cb_delete_qldh.length;i++){
        temp = i+1;
        Update_cb(cb_delete_qldh[i], temp, "Xoa", "QLDH");
    }
    for(var i=0; i<cb_update_qldh.length;i++){
        temp = i+1;
        Update_cb(cb_update_qldh[i], temp, "Sua", "QLDH");
    }
    //QLUser
    for(var i=0; i<cb_add_qluser.length;i++){
        temp = i+1;
        Update_cb(cb_add_qluser[i], temp, "Them", "QLUser");
    }
    for(var i=0; i<cb_delete_qluser.length;i++){
        temp = i+1;
        Update_cb(cb_delete_qluser[i], temp, "Xoa", "QLUser");
    }
    for(var i=0; i<cb_update_qluser.length;i++){
        temp = i+1;
        Update_cb(cb_update_qluser[i], temp, "Sua", "QLUser");
    }
    for(var i=0; i<cb_see_qluser.length;i++){
        temp = i+1;
        Update_cb(cb_see_qluser[i], temp, "Xem", "QLUser");
    }
    //QLDT
    for(var i=0; i<cb_see_qldt.length;i++){
        temp = i+1;
        Update_cb(cb_see_qldt[i], temp, "Xem", "QLDT");
    }
}