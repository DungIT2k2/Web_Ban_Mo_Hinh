const itemsCart = document.querySelector(".list__cart");
const cartBtnClose = document.querySelector(".cart__btnClose");
const cartOverlay = document.querySelector(".cart__overlay");
const cart = document.querySelector(".cart");
const cartItems = document.querySelector(".cart__items");
const noCart = document.querySelector(".cart__noCart");
const footer = document.querySelector(".cart__footer");
const cartCount = document.querySelector(".cart__counter");

// let cartFooter = `<div class="cart__footer">
// <div class="cart__total">
//   <div class="cart__total__title">Tổng tiền:</div>
//   <p>null!</p>
// </div>
// <button onclick="return handleOrder()" class="cart__btnOrder">Đặt Hàng</button>
// `;

var htmls = "";
cart.addEventListener("click", () => {
  // noCart.classList.add("able");
  getListCart();
  getCountCart();
  cartItems.classList.toggle("show");      
  itemsCart.classList.toggle("show");
  cartOverlay.classList.toggle("show");
});

cartBtnClose.addEventListener("click", () => {
  cart.click();
});
cartOverlay.addEventListener("click", () => {
  cart.click();
});

if(htmls == ""){
  getListCart();
  getCountCart();
}
// lay du lieu tu cart o session
function getListCart(){
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/XuLy_Cart.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      htmls = response;
      cartItems.innerHTML = htmls;
      console.log(htmls);
      if(cartItems.textContent == ""){
        noCart.classList.remove("disable");
      }
      else {
        noCart.classList.add("disable");
      }
    }
  };
  xhr.send("PhuongThuc=show");
}
function getCountCart(){
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/XuLy_Cart.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      cartCount.innerHTML = response;
    }
  };
  xhr.send("PhuongThuc=count");
}

// function checkCart0(){
//   console.warn(cartItems.textContent == "");  
//   if(cartItems.textContent == ""){
//     noCart.classList.add("able");
//     console.info("ON");
//   }
//   else {
//     noCart.classList.add("disable");
//     console.info("OFF");
//   }
  
// }
function deleteItem(id){
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/Remove_session_itemcart.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      getCountCart();
      getListCart();
    }
  };
  xhr.send("ProductID=" + id);
}