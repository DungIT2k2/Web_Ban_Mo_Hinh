const itemsCart = document.querySelector(".list__cart");
const cartBtnClose = document.querySelector(".cart__btnClose");
const cartOverlay = document.querySelector(".cart__overlay");
const cart = document.querySelector(".cart");
const cartItems = document.querySelector(".cart__items");
const noCart = document.querySelector(".cart__noCart");
const footer = document.querySelector(".cart__footer");
const cartCount = document.querySelector(".cart__counter");

var htmls = "";

if (htmls == "") {
  getListCart();
  getCountCart();
}

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
// kiêm tra nếu htmls ở trên không có dữ liêu thì chạy function đổ dữ liệu về

// lay du lieu tu cart o session
function getListCart() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/XuLy_Cart.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      htmls = response;
      cartItems.innerHTML = htmls;
      if(cartItems.textContent == ""){
        noCart.classList.remove("disable");
      }
      else {
        noCart.classList.add("disable");
      }
      // console.log(htmls);
      handleQuantity();
    }
  };
  xhr.send("PhuongThuc=show");
}

function getCountCart() {
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

function deleteItem(id) {
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

function handleQuantity() {
  const btnDown = [...document.querySelectorAll(".cart__btn-down")];
  const inputQuantity = [...document.querySelectorAll(".cart__input")];
  const btnUp = [...document.querySelectorAll(".cart__btn-up")];
  const idQuantity = [...document.querySelectorAll(".idQuantity")];
  const nameProduct = [...document.querySelectorAll(".cart__item__title")];

  //btnUp
  for (let i = 0; i < btnUp.length; i++) {
    btnUp[i].addEventListener("click", function () {
      // Xử lý khi click vào btnUp
      inputQuantity[i].value++;
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "./DAL/XuLy_Cart.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          // Xử lý kết quả trả về từ PHP
          var response = xhr.responseText;
          console.log(response);
          if(response == 1){
            alert("Số sản phẩm còn lại không đủ!");
          }
          getListCart();
        }
      };
      xhr.send("ProductID=" + idQuantity[i].textContent +
        "&newsoluong=" + (inputQuantity[i].value) +
        "&PhuongThuc=editsoluong");
    });
  }

  //btnDown
  for (let i = 0; i < btnDown.length; i++) {
    btnDown[i].addEventListener("click", function () {
      // Xử lý khi click vào btnDown
      inputQuantity[i].value--;
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "./DAL/XuLy_Cart.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          // Xử lý kết quả trả về từ PHP
          var response = xhr.responseText;
          console.log(response);
          getListCart();
        }
      };
      xhr.send("ProductID=" + idQuantity[i].textContent +
        "&newsoluong=" + (inputQuantity[i].value) +
        "&PhuongThuc=editsoluong");

      if (inputQuantity[i].value < 1) {
        if (confirm("Bạn muốn xóa sản phẩm " + nameProduct[i].textContent + " khỏi giỏ hàng không ?")) {
          deleteItem(idQuantity[i].textContent);
        }
        else{
          btnUp[i].click();      
        }
      }
    });
  }
}
function Order() {
  const tongtien = document.querySelector(".hidden");
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/XuLy_Cart.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      console.warn(response);
      if (response == 1){
        alert("Vui lòng đăng nhập trước khi đặt hàng!");
        window.location.href = './dangnhap.php';
      }
      if (response == 2){
        alert("Vui lòng cập nhật đủ thông tin trước khi đặt hàng!");
        const btn_info = document.getElementById("info");
        cartItems.classList.toggle("show");      
        itemsCart.classList.toggle("show");
        cartOverlay.classList.toggle("show");
        btn_info.click();
      }
      if (response == 0) {
        alert("Đặt hàng thành công!");
        getCountCart();
        cartItems.classList.toggle("show");      
        itemsCart.classList.toggle("show");
        cartOverlay.classList.toggle("show");
        location.reload();
      }
      
    }
  };
    xhr.send("PhuongThuc=order&tongtien="+tongtien.textContent);
}