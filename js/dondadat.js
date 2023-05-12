const items_shopbag = document.querySelector(".list__shopbag");
const shopbag_Overlay = document.querySelector(".shopbag__overlay");
const shopbag_Items = document.querySelector(".shopbag__items");
const no_shopbag = document.querySelector(".shopbag__noItem");
const btn_closeshopbag = document.querySelector(".shopbag__btnClose");
const shopbagOverlay = document.querySelector(".shopbag__overlay");

var idkh;
function show_dondadat(id) {
    idkh = id;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_dondadat.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            shopbag_Items.classList.toggle("show");
            items_shopbag.classList.toggle("show");
            shopbag_Overlay.classList.toggle("show");
            no_shopbag.classList.add("disable");
            if (response == 0) {
                no_shopbag.classList.remove("disable");
            }
            else {
                shopbag_Items.innerHTML = response;
            }
        }
    };
    xhr.send("id=" + id);
}
btn_closeshopbag.addEventListener("click", function () {
    show_dondadat(idkh);
});
shopbagOverlay.addEventListener("click", function () {
    show_dondadat(idkh);
});

const cthoadon_overlay = document.querySelector(".overplay_OrderDetail");
const cthoadon_close = document.querySelector(".btn_X");
const cthoadon_overlay_behind = document.querySelector(".overplay__behind_OrderDetail");
const content_OrderDetail = document.querySelector(".content_OrderDetail");

console.log(cthoadon_overlay);
cthoadon_close.addEventListener("click", function () {
    cthoadon_overlay.classList.toggle("show");
    shopbag_Items.classList.toggle("show");
    items_shopbag.classList.toggle("show");
    shopbag_Overlay.classList.toggle("show");
});
cthoadon_overlay_behind.addEventListener("click", function () {
    cthoadon_overlay.classList.toggle("show");
    shopbag_Items.classList.toggle("show");
    items_shopbag.classList.toggle("show");
    shopbag_Overlay.classList.toggle("show");
});

function XemChiTiet_Dondadat(iddonhang) {
    show_dondadat(idkh);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_DetailOrder.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            console.warn(response);
            content_OrderDetail.innerHTML = response;
            getChiTiet_Dondadat(iddonhang);
            cthoadon_overlay.classList.toggle("show");
        }
    };
    xhr.send("iddh=" + iddonhang + "&phuongthuc=tao");
}
function getChiTiet_Dondadat(iddonhang) {
    const tbody_CTDH = document.getElementById("tbody_CTDH");
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_DetailOrder.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            console.log(response);
            tbody_CTDH.innerHTML = response;
        }
    };
    xhr.send("iddh=" + iddonhang + "&phuongthuc=get");
}