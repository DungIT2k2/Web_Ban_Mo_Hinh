const btn_User = document.getElementById('User');
const btn_SP = document.getElementById('SP');
const btn_DH = document.getElementById('DH');
const btn_PQ = document.getElementById('PQ');
const btn_DT = document.getElementById('DT');

checkuser(role)
function checkuser(role){
    if (role == "" || role == "User"){
        alert("Vui lòng đăng nhập tài khoản quản lí!");
        location.href = "./index.php"
    }
}
function checkphanquyen(kv, phanquyen, callback) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Check_Quyen.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            callback(response);
        }
    };
    var data = "kv=" + kv + "&check=" + phanquyen;
    xhr.send(data);
}

btn_User.addEventListener("click", function(){
    if(btn_User.href == location){
        alert("Bạn không có quyền truy cập!");
    }
})
btn_SP.addEventListener("click", function(){
    if(btn_SP.href == location){
        alert("Bạn không có quyền truy cập!");
    }
})
btn_DH.addEventListener("click", function(){
    if(btn_DH.href == location){
        alert("Bạn không có quyền truy cập!");
    }
})
btn_PQ.addEventListener("click", function(){
    if(btn_PQ.href == location){
        alert("Bạn không có quyền truy cập!");
    }
})
btn_DT.addEventListener("click", function(){
    if(btn_DT.href == location){
        alert("Bạn không có quyền truy cập!");
    }
})

function checkphanquyenAll() {
    checkphanquyen("QLSP", "Xem", function (response) {
        console.log("QLSP" + response);
        if (response == 1) {
            btn_SP.href = "admin.php?id=1"
        }
    });
    checkphanquyen("QLDH", "Xem", function (response) {
        console.log("QLDH" + response);
        if (response == 1) {
            btn_DH.href = "admin.php?id=2"
        }
    });
    checkphanquyen("QLUser", "Xem", function (response) {
        console.log("QLUser" + response);
        if (response == 1) {
            btn_User.href = "admin.php?id=3&c=0"
        }
    });
    checkphanquyen("QLQuyen", "Xem", function (response) {
        console.log("QLQuyen" + response);
        if (response == 1) {
            btn_PQ.href = "admin.php?id=4"
        }
    });
    checkphanquyen("QLDT", "Xem", function (response) {
        console.log("QLDT" + response);
        if (response == 1) {
            btn_DT.href = "admin.php?id=5"
        }
    });

}
checkphanquyenAll();