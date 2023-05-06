const container__imgLarge_icon = document.querySelectorAll('.container__imgLarge-icon');
const container__imgLarge_img = document.querySelectorAll('.container__imgLarge-img');
const container__imgLarge_icon_circle = document.querySelectorAll('.container__imgLarge-icon-circle');
const menuList = document.querySelector('.header__menu-list');
const accountSubMenu = document.querySelector('.header__submenu-list-account');
const stadingSubMenu = document.querySelector('.header__submenu-list-stading');
const favoriteSubmenu = document.querySelector('.header__submenu-list-favorite');
const overplay = document.querySelector('.overplay');
const menu = document.querySelector(".header__menu");

function showImg(n) {
    for (var i = 0; i < container__imgLarge_img.length; i++) {
        container__imgLarge_img[i].style.display = 'none';
        container__imgLarge_icon_circle[i].classList.remove('active');
    }
    container__imgLarge_img[n].style.display = 'block';
    container__imgLarge_icon_circle[n].classList.add('active');
}

var n = 0;
showImg(n);
container__imgLarge_icon[0].onclick = function () {
    n--;
    if (n < 0) {
        n = container__imgLarge_img.length - 1;
        showImg(n);
    } else {
        showImg(n);
    }
}

container__imgLarge_icon[1].onclick = function () {
    n++;
    if (n >= container__imgLarge_img.length) {
        n = 0;
        showImg(n);
    } else {
        showImg(n);
    }
}

container__imgLarge_icon_circle[0].onclick = function () {
    showImg(0);
}
container__imgLarge_icon_circle[1].onclick = function () {
    showImg(1);
}
container__imgLarge_icon_circle[2].onclick = function () {
    showImg(2);
}

menu.addEventListener("click", () => {
    showMenu();
    overplay.style.display = "block";
});

function showAccount() {
    accountSubMenu.classList.toggle('show');
}

function showStading() {
    stadingSubMenu.classList.toggle('show');
}

function showFavorite() {
    favoriteSubmenu.classList.toggle('show');
}

function closeMenu() {
    menuList.style.width = "0";
    overplay.style.display = "none";
}

overplay.onclick = function() {
    menuList.style.width = "0";
    overplay.style.display = "none";
}
function showMenu() {
    menuList.style.width = "270px";
}



