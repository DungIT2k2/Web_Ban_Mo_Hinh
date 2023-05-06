
const container_content = document.querySelector(".container-content");
console.log(con)
const pagination_element = document.getElementById("pagination");
let current_page = 1;
let rows = 10;
var widthBrowser = document.body.offsetWidth;
window.addEventListener("resize", function (event) {
  console.log(document.body.offsetWidth);
  widthBrowser = document.body.offsetWidth;
});

if (widthBrowser < 1024) {
  rows = 8;
}
if (widthBrowser < 767) {
  rows = 6;
}
if (widthBrowser < 468) {
  rows = 4;
}

function DisplayList(items, rows_per_page, page) {
  console.log(page);
  page--;
  console.log(rows_per_page, page);
  let start = rows_per_page * page;
  let end = start + rows_per_page;
  console.log(start, end);
  let paginatedItems = items.slice(start, end);
  console.log(paginatedItems);
  renderData(paginatedItems);
}
/* ======================== */
function renderData(dataArr) {
  const container = document.querySelector(".container-content");
  let htmls = "";
  dataArr.forEach((item) => {
    htmls += `<div class="container__row-card" onclick="showItemDetail(${
      item.id
    })"  >
    <div class="product__price--percent"><p>${Math.floor(
      ((item.price - item.currentPrice) * 100) / item.price
    )}%<p></div>
                <img class="card__img" src="${item.srcImg[0]}" />  
                <div class="card__title">${item.title}</div>
                <div class="card__footer"> 
                <div class="card__item__Price">${numbertoVND(item.price)}</div>
                <div class="card__item__currentPrice">${numbertoVND(
                  item.currentPrice
                )}</div>
                </div>
                
            </div>
        `;
  });
  return (container.innerHTML = htmls);
}
function SetupPagination(items, wrapper, rows_per_page) {
  wrapper.innerHTML = "";
  let page_count = Math.ceil(items.length / rows_per_page);
  console.log(page_count);
  for (let i = 1; i < page_count + 1; i++) {
    let btn = PaginationButton(i, items, rows_per_page);
    wrapper.appendChild(btn);
  }
}
/* ======================== */
function PaginationButton(page, items, rowss) {
  let button = document.createElement("button");
  button.innerText = page;

  if (current_page == page) button.classList.add("active");

  button.addEventListener("click", function () {
    current_page = page;
    DisplayList(items, rowss, current_page);
    let current_btn = document.querySelector(".pagenumbers button.active");
    current_btn.classList.remove("active");
    window.scrollTo(0, 0);
    button.classList.add("active");
  });

  return button;
}

/* goi ham */
/* DisplayList(books, rows, current_page);
SetupPagination(books, pagination_element, rows); */
function changeImg(srcImg) {
  let imgPath = document.querySelector(".modal-body-left .card__img");
  imgPath.setAttribute("src", srcImg);
}
function showItemDetail(id) {
  // let books = JSON.parse(localStorage.getItem("books"));
  
  books.forEach((item) => {
    if (item.id == id) {
      const e = document.querySelector(".element" + id);
      const modal_container = document.querySelector("#modal-container");

      let htmls = `
        <div id="modal">
          <div class="modal-header">
            <p class="btn-close">
              <i class="fa-solid fa-xmark"> </i>
            </p>
            </div>
            <div class="modal-body">
              <div class="modal-body-left">
              <img class="card__img" src="${item.srcImg[0]}" />  
              <div class="modal__img-list">
              </div>
            </div>

            <div class="modal-body-right">
            <div class="card__title">${item.title}</div>
              <p class="card__author">Tác giả: ${item.author}</p>
              
              <div>
              
                <div class="card__currentPrice">${numbertoVND(
                  item.currentPrice
                )}</div>
                <div class="card__price">${numbertoVND(item.price)}</div>
                <span class="card__price__persent">-${Math.floor(
                  ((item.price - item.currentPrice) * 100) / item.price
                )}%</span>
              </div>
              <p class="card__quantity__label">Số Lượng</p>
              <div class="card__quantityInput" >
              <button class="cart__btn__down"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-remove.svg" alt="remove-icon"></button>
              <input type="text" class="cart__input__quantity" value="1">
              <button class="cart__btn__up"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/pdp_revamp_v2/icons-add.svg" alt="add-icon"></button>
              
              </div>
              <button class="btn-add-to-cart" onclick="getIdCart(${
                item.id
              })">Thêm vào giỏ hàng</button>
          </div>
          </div>
          <div class="card__description">
          <h3>Thông tin sản phẩm</h3>
          <table>
             
              <tbody>
                <tr>
                  <td>Mã hàng:</td>
                  <td>${item.id}</td>
                </tr> 
                <tr>
                  <td>Tác giả:</td>
                  <td>${item.author}</td>
                </tr> 
                <tr>
                  <td>NXB:</td>
                  <td>NXB Phụ Nữ</td>
                </tr> 
                <tr>
                  <td>Năm XB:</td>
                  <td>2019</td>
                </tr>   
                <tr>
                  <td>Số trang:</td>
                  <td>199</td>
                </tr> 
              
              
              </tbody> 
          </table>
          <p>
          ${item.description}
          </p>
          </div>
          </div>
          <div class="modal-overlay"></div>
        `;
      modal_container.innerHTML = htmls;

      const overlay = document.querySelector(".modal-overlay");
      const modal = document.querySelector("#modal");
      const body = document.querySelector("html");
      getSrcImg(item);
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
      console.log(btnDown, inputQuantity, btnUp);
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
    }
  });

  function getSrcImg(item) {
    // let imgCount = 0;
    const imgList = document.querySelector(".modal__img-list");
    let htmls = "";
    item.srcImg.forEach((img, index) => {
      // imgCount++;
      return (htmls += `
      <img class="card__img" src="${item.srcImg[index]}" onclick="changeImg('${item.srcImg[index]}')"/>  
      `);
    });
    imgList.innerHTML = htmls;
    // const imgThumpnalList = document.querySelector(
    //   ".modal__img-list .card__img"
    // );
    // let widthCardList = (1 / imgCount) * 100;
    // console.log(imgThumpnalList);
    // console.log(widthCardList);
    // imgThumpnalList.style.width = widthCardList + "%";
  }
}
function Banner(status) {
  const banner = document.querySelector(".banner");
  if (status === "disable") return banner.classList.add("disable");
  else {
    return banner.classList.remove("disable");
  }
}
function products_list(status) {
  const productList = document.querySelector(".product__container");
  if (status === "disable") return productList.classList.add("disable");
  else {
    return productList.classList.remove("disable");
  }
}
function numberWithCommas(x) {
  var parts = x.toString().split(".");
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  let result = parts.join(",");
  return result;
}
function numbertoVND(x) {
  return numberWithCommas(x) + " đ";
}

/* ============search range */
