const btn_naruto = document.getElementById("btn_Naruto");
const btn_OP = document.getElementById("btn_OP");
const btn_LOL = document.getElementById("btn_LOL");
const btn_DB = document.getElementById("btn_DB");
const btn_KR = document.getElementById("btn_KR");
const btn_AR = document.getElementById("btn_AR");
const btn_Piston = document.getElementById("btn_Piston");
const btn_SMG = document.getElementById("btn_SMG");
const btn_SR = document.getElementById("btn_SR");
const btn_Shotgun = document.getElementById("btn_Shotgun");
const btn_PK = document.getElementById("btn_PK");
const btn_GB = document.getElementById("btn_GB");
const btn_2ND = document.getElementById("btn_2ND");
const btn_Khac = document.getElementById("btn_Khac");
const btn_MHNV = document.getElementById("btn_MHNV");
const btn_MHS = document.getElementById("btn_MHS");
const banner = document.getElementById("banner");
const product_content = document.querySelector(".product_content");

btn_naruto.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_naruto.textContent);
});
btn_OP.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_OP.textContent);
});
btn_LOL.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_LOL.textContent);
});
btn_DB.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_DB.textContent);
});
btn_KR.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_KR.textContent);
});
btn_AR.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_AR.textContent);
});
btn_Piston.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_Piston.textContent);
});
btn_SMG.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_SMG.textContent);
});
btn_SR.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_SR.textContent);
});
btn_Shotgun.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_Shotgun.textContent);
});
btn_PK.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_PK.textContent);
});
btn_GB.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_GB.textContent);
});
btn_2ND.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_2ND.textContent);
});
btn_Khac.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_Khac.textContent);
});
btn_MHNV.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_MHNV.textContent);
});
btn_MHS.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_MHS.textContent);
});

function getProduct(loaisp) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Product_List.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            console.log(response);
            product_content.innerHTML = response;
        }
    };
    xhr.send("tenloaisp="+loaisp);
}