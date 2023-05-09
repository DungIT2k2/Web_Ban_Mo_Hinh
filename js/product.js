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
const pagenumber = document.querySelector(".pagenumber");

btn_naruto.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_naruto.textContent);
    product_content.style.display = "block";
});
btn_OP.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_OP.textContent);
    product_content.style.display = "block";
});
btn_LOL.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_LOL.textContent);
    product_content.style.display = "block";
});
btn_DB.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_DB.textContent);
    product_content.style.display = "block";
});
btn_KR.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_KR.textContent);
    product_content.style.display = "block";
});
btn_AR.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_AR.textContent);
    product_content.style.display = "block";
});
btn_Piston.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_Piston.textContent);
    product_content.style.display = "block";
});
btn_SMG.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_SMG.textContent);
    product_content.style.display = "block";
});
btn_SR.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_SR.textContent);
    product_content.style.display = "block";
});
btn_Shotgun.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_Shotgun.textContent);
    product_content.style.display = "block";
});
btn_PK.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_PK.textContent);
    product_content.style.display = "block";
});
btn_GB.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_GB.textContent);
    product_content.style.display = "block";
});
btn_2ND.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_2ND.textContent);
    product_content.style.display = "block";
});
btn_Khac.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_Khac.textContent);
    product_content.style.display = "block";
});
btn_MHNV.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_MHNV.textContent);
    product_content.style.display = "block";
});
btn_MHS.addEventListener("click", function () {
    banner.classList.add("disable");
    getProduct(btn_MHS.textContent);
    product_content.style.display = "block";
});

function getProduct(loaisp) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Product_List.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            createPhanTrang(loaisp, function(htmls){
                var phantrang = htmls;
                var htmls = response + phantrang;
                product_content.innerHTML = htmls;
            });
        }
    };
    xhr.send("tenloaisp="+loaisp+"&start=0");
}
function handlePageNumber(loaisp,start){
    if(start == 1){
        start = 0;
    }else{
        start = (start-1)*3;
    }
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Product_List.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            createPhanTrang(loaisp, function(htmls){
                var phantrang = htmls;
                var htmls = response + phantrang;
                product_content.innerHTML = htmls;
            });
        }
    };
    xhr.send("tenloaisp="+loaisp+"&start="+start);
}
function createPhanTrang(loaisp, callback){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_PhanTrang.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            callback(response);
        }
    };
    xhr.send("tenloaisp="+loaisp);
}