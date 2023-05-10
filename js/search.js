const searchText = document.getElementById("searchText");
const btn_search = document.querySelector(".header__search__btn");
const header__search = document.querySelector(".header__search");
const header_search_input = document.querySelector('.header__search__input');
const controler = document.querySelector(".controler");
const toolbar__search = document.querySelector(".toolbar__search")
const cb_loaisp = document.querySelector(".toolbar__search-filter");
const btn_Loc = document.querySelector(".toolbar__search-icon");
const price_range = document.getElementsByName("price-range");
const type_price = document.querySelector(".toolbar__search-range-title");

var start_page;
var end_page;
var tensp;
var kieugia;
var idcaterogy;
var to_gia;
var from_gia;
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
    start_page = 1;
    end_page = start_page + 2;
    getDataSearchAll(0);
});

function getDataSearchAll(start) {
    tensp = header_search_input.value;
    kieugia = type_price.value;
    idcaterogy = cb_loaisp.value;
    to_gia = price_range[0].value;
    from_gia = price_range[1].value;
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
                taoPhanTrang(start_page,end_page, function(htmls){
                    const pagination = document.querySelector(".pagination_search");
                    pagination.innerHTML = htmls;
                });

            }
        };
        console.error("tensp=" + tensp + "&loai=getsearch&kieugia=" + kieugia + "&caterogy=" + idcaterogy + "&to=" + to_gia + "&from=" + from_gia+"&start="+start);
        xhr.send("tensp=" + tensp + "&loai=getsearch&kieugia=" + kieugia + "&caterogy=" + idcaterogy + "&to=" + to_gia + "&from=" + from_gia+"&start="+start);
    }
};

btn_Loc.addEventListener("click", function () {
    getDataSearchAll(0);
});

controler.addEventListener("click", function (){
    location.href = "index.php";
});

function chonPageNumber(start){
    const container_content = document.querySelector(".container-content");
    if(start == 1){
        start = 0;
    }else{
        start = (start-1)*8 + 1;
    }
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Search_Product.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            container_content.innerHTML = response;
            taoPhanTrang(start_page,end_page, function(htmls){
                const pagination = document.querySelector(".pagination_search");
                pagination.innerHTML = htmls;
            });
        }
    };
    xhr.send("tensp=" + tensp + "&loai=getsearch&kieugia=" + kieugia + "&caterogy=" + idcaterogy + "&to=" + to_gia + "&from=" + from_gia+"&start="+start);
}
function tienRenderPageNumber(end_p){
    start_page = end_p + 1;
    end_page = end_p + 3;
    taoPhanTrang(start_page,end_page, function(htmls){
        const pagination = document.querySelector(".pagination_search");
        pagination.innerHTML = htmls;   
    });
}
function luiRenderPageNumber(start_p){
    if (start_p <= 3){
        start_p = 1;
    }
    else{
        start_p = start_p - 3;
    }
    start_page = start_p
    end_page = start_p +2;
    taoPhanTrang(start_page,end_page, function(htmls){
        const pagination = document.querySelector(".pagination_search");
        pagination.innerHTML = htmls; 
    });
}
function taoPhanTrang(start,end, callback){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Search_Product.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            console.warn(response);
            callback(response);
        }
    };
    xhr.send("loai=phantrang&tensp=" + tensp + "&kieugia=" + kieugia + "&caterogy=" + idcaterogy + "&to=" + to_gia + "&from=" + from_gia+ "&start="+start+"&end="+end);
}