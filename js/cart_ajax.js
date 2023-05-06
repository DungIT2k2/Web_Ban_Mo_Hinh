const itemsCart = document.querySelector(".list__cart");
const cartBtnClose = document.querySelector(".cart__btnClose");
const cartOverlay = document.querySelector(".cart__overlay");
const cart = document.querySelector(".cart");
const cartItems = document.querySelector(".cart__items");
const cartItemList = document.querySelector(".cart__items");
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
  getListCart();
  console.log(htmls);
  noCart.classList.add("disable")
  cartItems.innerHTML = htmls; 
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
      // console.log(htmls);
    }
  };
  xhr.send("PhuongThuc=show");
}

function deleteItem(id){
  console
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/Remove_session_itemcart.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;  
      location.reload();
    }
  };
  xhr.send("ProductID=" + id);
}