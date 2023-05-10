function showItemDetail(
  name,
  amount,
  character_name,
  anime_manga,
  height,
  weight,
  material,
  product_detail,
  srcImg,
  price,
  id
) {
  var price_mutiple_10perent = parseFloat(price) * 0.1;

  var price_before_discount_10percent = price + price_mutiple_10perent;
  var price_before_discount_10percent_formatted =
    price_before_discount_10percent.toLocaleString("vi-VN", {
      useGrouping: true,
      minimumFractionDigits: 0,
      maximumFractionDigits: 0,
    });
  const modal_container = document.querySelector("#modal-container");

  let formatted_Price = price.toLocaleString("vi-VN", {
    useGrouping: true,
    minimumFractionDigits: 0,
    maximumFractionDigits: 0,
  });
  console.log(formatted_Price); // Kết quả: "100.000"

  let htmls = `
  
        <div id="modal">
            <div class="modal-header">
              <p class="btn-close">
                <i class="fa-solid fa-xmark"> </i>
              </p>
            </div>

            <div class="modal-body">
              <div class="modal-body-left">
                <img class="card__img" src="${srcImg}"/>  
                <div class="modal__img-list"></div>
            </div>
  
            <div class="modal-body-right">
                <div class="card__title">${name}</div>
                <p class="card__author">Còn lại: ${amount}</p>
                
                <div>
                  <div class="card__currentPrice">${formatted_Price} VND</div>
                  <div class="card__price">${price_before_discount_10percent_formatted}</div>
                  <span class="card__price__persent">10%</span>
                </div>

                  <p class="card__quantity__label">Số Lượng</p>

                  <div class="card__quantityInput" >
                    <button class="cart__btn__down"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-remove.svg" alt="remove-icon"></button>
                    <input type="text" class="cart__input__quantity" value="1" id="SL_current">
                    <button class="cart__btn__up"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-add.svg" alt="add-icon"></button>
                  </div>

                <button class="btn-add-to-cart">Thêm vào giỏ hàng</button>
            </div>
        </div>
          <div class="card__description">
              <div class = "information_product">
            <h3>Thông tin sản phẩm</h3>

                <table class = "table_description">
                  <tr>
                  <td>Nhân vật:</td>
                  <td>${character_name}</td>
                  </tr>
                  <tr>
                    <td>Anime/Manga:</td>
                    <td>${anime_manga}</td>
                  </tr>
                  <tr>
                    <td>Chiều cao:</td>
                    <td>${height}</td>
                  </tr>
                </table>
              

              
                <table class = "table_description">
                    <tr>
                      <td>Vật liệu:</td>
                      <td>${material}</td>
                    </tr>
                    <tr>
                      <td>Khối lượng:</td>
                      <td>${weight}</td>
                    </tr>
                  </table>
              </div>
              <div class = "clear"></div>
              <div class = "product__detail-modal information_product">
                  <h3>Mô tả sản phẩm</h3>
                  <p>${product_detail}</p>
              </div>
            </div>
            </div>
            <div class="modal-overlay"></div>
          
            `;
  modal_container.innerHTML = htmls;

  const overlay = document.querySelector(".modal-overlay");
  const modal = document.querySelector("#modal");
  const body = document.querySelector("html");
  // getSrcImg(item);
  overlay.classList.add("show");
  modal.classList.add("show");
  // body.classList.add("show");
  modal.style.top = 15 + window.pageYOffset + "px";
  window.addEventListener("scroll", () => {
    setTopModal();
  });
  function setTopModal() {
    modal.style.top = 20 + window.pageYOffset + "px";
  }

  var btn_close = document.querySelector(".btn-close");
  btn_close.addEventListener("click", () => {
    overlay.classList.remove("show");
    modal.classList.remove("show");
    // body.classList.remove("show");
  });

  overlay.addEventListener("click", () => {
    overlay.classList.remove("show");
    modal.classList.remove("show");
    // body.classList.remove("show");
  });
  // btn down up quantity
  const btnDown = document.querySelector(".cart__btn__down");
  const inputQuantity = document.querySelector(".cart__input__quantity");
  const btnUp = document.querySelector(".cart__btn__up");
  // console.log(btnDown, inputQuantity, btnUp);
  btnDown.addEventListener("click", () => {
    if (inputQuantity.value <= 1) {
      inputQuantity.value = 1;
    } else {
      inputQuantity.value--;
    }
  });
  btnUp.addEventListener("click", () => {
    inputQuantity.value++;
  });

  const btn_add = document.querySelector(".btn-add-to-cart");
  const SL_current = document.getElementById("SL_current");

  btn_add.addEventListener("click", function () {
    overlay.classList.remove("show");
    modal.classList.remove("show");
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/XuLy_Cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Xử lý kết quả trả về từ PHP
        var response = xhr.responseText;
        getListCart();
        getCountCart();
        if(response == 1){
          alert("Số lượng còn lại không đủ!");
        }
      }
    };
    xhr.send(
      "ProductID=" + id + "&SoLuong=" + SL_current.value + "&PhuongThuc=add"
    );
  });
}

