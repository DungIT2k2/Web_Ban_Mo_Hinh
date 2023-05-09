const searchText = document.getElementById("searchText");
const btn_search = document.querySelector(".header__search__btn");
const header__search = document.querySelector('.header__search');

btn_search.addEventListener("click", function(){
    const toolbar__search = document.querySelector(".toolbar__search")
    const banner = document.querySelector(".banner");
    const product_container = document.querySelector(".display_row_card");
    const container_header = document.querySelector(".container-header");
    const container_content = document.querySelector(".container-content");
    const pagination = document.getElementById("pagination");

    console.log(product_container);
    header__search.classList.toggle("show");
    banner.classList.add("disable");
    product_container.classList.add("disable");
    // toolbar__search.style.display = "block";
    pagination.style.display = "block";
});