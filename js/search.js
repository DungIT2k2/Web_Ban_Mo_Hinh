const searchText = document.getElementById("searchText");
const btn_search = document.querySelector(".header__search__btn");
const header__search = document.querySelector('.header__search');

btn_search.onclick = function() {
    header__search.classList.toggle("show");
}