const searchText = document.getElementById("searchText");
const btn_search = document.querySelector(".header__search__btn");
const header__search = document.querySelector(".header__search");
const header_search_input = document.querySelector('.header__search__input');
const controler = document.querySelector(".controler");
const toolbar__search = document.querySelector(".toolbar__search")
const pagination = document.getElementById("pagination");
const cb_loaisp = document.querySelector(".toolbar__search-filter");
const btn_Loc = document.querySelector(".toolbar__search-icon");
const price_range = document.getElementsByName("price-range");
const type_price = document.querySelector(".toolbar__search-range-title");

btn_search.addEventListener("click", function () {
    const banner = document.querySelector(".banner");
    const product_container = document.querySelector(".display_row_card");
    console.log(product_container);
    header__search.classList.toggle("show");
    banner.classList.add("disable");
    product_container.classList.add("disable");
    controler.classList.add("show");
    toolbar__search.style.display = "block";
    pagination.style.display = "block";
    getDataSearchAll(header_search_input.value, type_price.value, cb_loaisp.value, price_range[0].value, price_range[1].value);
});

function getDataSearchAll(tensp, kieugia, idcaterogy, to_gia, from_gia) {
    if (from_gia < to_gia) {
        alert("Khoảng giá không hợp lệ!");
    }
    else {
        const container_header = document.querySelector(".container-header");
        const container_content = document.querySelector(".container-content");
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "./DAL/DAL_Search_Product.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                // Xử lý kết quả trả về từ PHP
                var response = xhr.responseText;
                console.log(response);
                container_content.innerHTML = response;

            }
        };
        xhr.send("tensp=" + tensp + "&loai=getsearch&kieugia=" + kieugia + "&caterogy=" + idcaterogy + "&to=" + to_gia + "&from=" + from_gia);
    }
};

btn_Loc.addEventListener("click", function () {
    // console.log(type_price.value);
    // console.log(header_search_input.value);
    // console.log(price_range[0].value);
    // console.log(price_range[1].value);
    getDataSearchAll(header_search_input.value, type_price.value, cb_loaisp.value, price_range[0].value, price_range[1].value);
});

controler.addEventListener("click", function (){
    location.href = "index.php";
});

function handlePageNumber(loaisp,start){
    if(start == 1){
        start = 0;
    }else{
        start = (start-1);
    }
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Product_List.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            product_content.innerHTML = response;
            createPhanTrang(loaisp,start_page,end_page, function(htmls){
                const pagenumber = document.querySelector(".pagenumber");
                pagenumber.innerHTML = htmls;
            });
        }
    };
    xhr.send("tenloaisp="+loaisp+"&start="+start);
}
function nextRenderPageNumber(loaisp,end_p){
    const pagenumber = document.querySelector(".pagenumber");
    start_page = end_p + 1;
    end_page = end_p + 3;
    createPhanTrang(loaisp,start_page,end_page, function(htmls){
        var phantrang = htmls;
        pagenumber.innerHTML = phantrang;   
    });
}
function backRenderPageNumber(loaisp,start_p){
    if (start_p <= 3){
        start_p = 1;
    }
    else{
        start_p = start_p - 3;
    }
    const pagenumber = document.querySelector(".pagenumber");
    start_page = start_p
    end_page = start_p +2;
    createPhanTrang(loaisp,start_page,end_page, function(htmls){
        var phantrang = htmls;
        pagenumber.innerHTML = phantrang;   
    });
}
function createPhanTrang(loaisp,start,end, callback){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_PhanTrang.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            console.warn(response);
            callback(response);
        }
    };
    xhr.send("tenloaisp="+loaisp+"&start="+start+"&end="+end);
}