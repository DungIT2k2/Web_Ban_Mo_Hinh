const cb_Quyen = document.getElementById('cb_Quyen');
const tbody = document.getElementById('tBody_QL_Quyen');
const btn_save = document.getElementById('btn_update');
const cb_QLSP = document.getElementsByName('QLSP');
const cb_QLDH = document.getElementsByName('QLDH');
const cb_QLUser = document.getElementsByName('QLUser');
const cb_QLDT = document.getElementsByName('QLDT');
const cb_QLQuyen = document.getElementsByName('QLQuyen');

getDataPhanQuyen(cb_Quyen.value);

cb_Quyen.addEventListener("change", function(){
    getDataPhanQuyen(cb_Quyen.value);
});
var count;
btn_save.addEventListener("click", function(){
    count = 0;
    chooserowupdate(cb_QLSP);
    chooserowupdate(cb_QLDH);
    chooserowupdate(cb_QLUser);
    chooserowupdate(cb_QLDT);
    chooserowupdate(cb_QLQuyen);
    
});

function chooserowupdate(cb){
    var id = cb[0].id;
    var name = cb[0].name;
    var temp = [];
    for(var i=0; i<cb.length; i++){
        if(cb[i].checked == true){
            temp[i] = 1;
        }
        else{
            temp[i] = 0;
        }
    }
    console.log(temp);
    updateDataPhanQuyen(id,name,temp);
}

function getDataPhanQuyen(quyen){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_QL_Quyen.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP  
            var response = xhr.responseText;
            var htmls = response;
            tbody.innerHTML = htmls;
        }
    };
    var data = "idquyen="+quyen;
    xhr.send(data);
}
function updateDataPhanQuyen(idq, kv, temp){
    //Gửi dữ liệu lên bằng Ajax
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Update_QuyenUser.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            console.log(response);
            if (response == 1){
                count++;
            }
            else {
                alert("Cập nhật phân quyền "+ kv +" không thành công!")
            }
            if(count == 5){
                alert("Cập nhật phân quyền thành công!")
            }
        }
    };
    var data = "idq=" + idq + "&kv=" + kv + "&Them=" + temp[0] + "&Xoa=" + temp[1] + "&Sua=" + temp[2] + "&Xem=" + temp[3];
    xhr.send(data);
}



