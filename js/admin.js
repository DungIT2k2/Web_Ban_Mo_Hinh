console.log(role);

const btn_User = document.getElementById('User');
const btn_SP = document.getElementById('SP');
const btn_DH = document.getElementById('DH');
const btn_PQ = document.getElementById('PQ');
const btn_DT = document.getElementById('DT');

console.log(btn_User);
console.log(btn_SP);
console.log(btn_DH);
console.log(btn_PQ);
console.log(btn_DT);


function checkphanquyen(tenquyen, kv, phanquyen, callback) {
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
    var data = "TenQuyen=" + tenquyen + "&kv=" + kv + "&check=" + phanquyen;
    xhr.send(data);
}

function checkphanquyenAll() {
    checkphanquyen(role, "QLSP", "Xem", function (response) {
        console.log("QLSP" + response);
        if (response == 1) {
            btn_SP.href = "admin.php?id=1"
        }
    });
    checkphanquyen(role, "QLDH", "Xem", function (response) {
        console.log("QLDH" + response);
        if (response == 1) {
            btn_DH.href = "admin.php?id=2"
        }
    });
    checkphanquyen(role, "QLUser", "Xem", function (response) {
        console.log("QLUser" + response);
        if (response == 1) {
            btn_User.href = "admin.php?id=3&c=0"
        }
    });
    checkphanquyen(role, "QLQuyen", "Xem", function (response) {
        console.log("QLQuyen" + response);
        if (response == 1) {
            btn_PQ.href = "admin.php?id=4"
        }
    });
    checkphanquyen(role, "QLDT", "Xem", function (response) {
        console.log("QLDT" + response);
        if (response == 1) {
            btn_DT.href = "admin.php?id=5"
        }
    });

}
checkphanquyenAll();