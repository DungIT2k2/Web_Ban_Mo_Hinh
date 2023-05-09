<link rel="stylesheet" href="./css/modal.css">
<link rel="stylesheet" href="./css/global.css">
<div class="banner">
  <div class="banner__primary">
    <div class="container-tasbar">
      <ul class="container-tasbar__list">
        <span class="container-tasbar__list-title">DANH MỤC SẢN PHẨM</span>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text container-tasbar__item-text--bold" id="btn_MHNV">Mô Hình Nhân Vật</span>
          <i class="container-tasbar__item-icon fa-solid fa-angle-right"></i>
          <ul class="container-tasbar__subnav">
            <a>
              <li class="container-tasbar__subnav-item" id="btn_Naruto">Naruto</li>
            </a>
            <a>
              <li class="container-tasbar__subnav-item" id="btn_OP">One Piece</li>
            </a>
            <a>
              <li class="container-tasbar__subnav-item" id="btn_LOL">League of Legend</li>
            </a>
            <a>
              <li class="container-tasbar__subnav-item" id="btn_DB">Dragon Ball</li>
            </a>
            <a>
              <li class="container-tasbar__subnav-item" id="btn_KR">Kamen Rider</li>
            </a>
          </ul>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text container-tasbar__item-text--bold" id="btn_MHS">
            Mô Hình Súng</span>
          <i class="container-tasbar__item-icon fa-solid fa-angle-right"></i>
          <ul class="container-tasbar__subnav">
            <a>
              <li class="container-tasbar__subnav-item" id="btn_AR">AR</li>
            </a>
            <a>
              <li class="container-tasbar__subnav-item" id="btn_Piston">Pistol</li>
            </a>
            <a>
              <li class="container-tasbar__subnav-item" id="btn_SMG">SMG</li>
            </a>
            <a>
              <li class="container-tasbar__subnav-item" id="btn_SR">SR</li>
            </a>
            <a>
              <li class="container-tasbar__subnav-item" id="btn_Shotgun">Shotgun</li>
            </a>
          </ul>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text" id="btn_PK">Phụ kiện</span>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text" id="btn_GB">Gấu Bông</span>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text" id="btn_2ND">Đã qua sử dụng(2ND)</span>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text" id="btn_Khac">Các Mô Hình Khác</span>
        </li>
      </ul>
    </div>
    <div class="product_content"></div>
</div>
    <div class="container__imgLarge" id="banner">
      <div class="container__imgLarge-wrap">
        <img src="./img/banner1.png" alt="" class="container__imgLarge-img" />
        <img src="./img/banner2.png" alt="" class="container__imgLarge-img" />
        <div class="container__imgLarge-wrap-icon">
          <i class="container__imgLarge-icon fa-solid fa-circle-left"></i>
          <i class="container__imgLarge-icon fa-solid fa-circle-right"></i>
        </div>
        <div class="container__imgLarge-wrap-circle">
          <i class="container__imgLarge-icon-circle container__imgLarge-icon-circle active fa-solid fa-circle"></i>
            <i class="container__imgLarge-icon-circle fa-solid fa-circle"></i>
        </div>
      </div>
      <div class="banner__thumbnail">
        <img src="./img/thumbnail1.png" alt="" />
        <img src="./img/thumbnail2.png" alt="" />
        <img src="./img/thumbnail3.png" alt="" />
      </div>
    </div>
  </div>
</div>

<div class="controler">
  <!-- <i class="fa-solid fa-left-long"></i> -->
  <i class="fa-solid fa-circle-left"></i>
</div>
<form class="toolbar__search" style="display: none">
  <div class="toolbar__search-left">
    <span class="toolbar__search-title">Sắp xếp theo</span>

    <div class="toolbar__search-filter">
      <div class="toolbar__search-filter-title">
        <span value="Thể loại"></span>
        <i class="fa-solid fa-caret-down"></i>
      </div>

      <div class="toolbar__search-filter-list">
        <div class="toolbar__search-range-item" value="skill_books">
          Sách Kĩ Năng<i class="fa-solid fa-check"></i>
        </div>
        <div class="toolbar__search-range-item" value="economic_books">
          Sách Kinh Tế<i class="fa-solid fa-check"></i>
        </div>
        <div class="toolbar__search-range-item" value="children_books">
          Sách Trẻ Em<i class="fa-solid fa-check"></i>
        </div>
        <div class="toolbar__search-range-item" value="full_books">
          Tất cả<i class="fa-solid fa-check"></i>
        </div>
      </div>
    </div>
    <div class="toolbar__search-range">
      <div class="toolbar__search-range-title">
        <span value="Giá"></span>
        <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="toolbar__search-range-list">
        <div class="toolbar__search-range-item-up">
          Giá: Thấp đến Cao<i class="fa-solid fa-check"></i>
        </div>
        <div class="toolbar__search-range-item-down">
          Giá: Cao đến Thấp<i class="fa-solid fa-check"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="price-range">
    <input placeholder="10.000đ" type="number" name="" step="10000" required />
    <span></span>
    <input placeholder="1.000.000đ" type="number" name="" step="10000" required />
    <button type="submit" class="toolbar__search-icon">Áp dụng</button>
  </div>
</form>
<div class="toolbar__search-message"></div>
<div class="product__container display_row_card">

  <div class="container__row">
    <div class=container__row-header>MÔ HÌNH NHÂN VẬT</div>
    <div class=container__row-btn-prev>
      <i class="fa-solid fa-chevron-left"></i>
    </div>
    <div class=container__row-wrap-list>
      <?php include("./DAL/DAL_product_warp-list-mhnv.php"); ?>
    </div>
    <div class="container__row-btn-next">
      <i class="fa-solid fa-chevron-right"></i>
    </div>
  </div>

  <div class="container__row">
    <div class=container__row-header>MÔ HÌNH SÚNG</div>
    <div class=container__row-btn-prev>
      <i class="fa-solid fa-chevron-left"></i>
    </div>
    <div class=container__row-wrap-list>
      <?php include("./DAL/DAL_product-wrap-list-mhs.php"); ?>
    </div>
    <div class="container__row-btn-next">
      <i class="fa-solid fa-chevron-right"></i>
    </div>
  </div>

  <!-- <div class="container__row"></div> -->
</div>
<div class="main">
  <div class="container-header"></div>
  <div class="container-content" style="display: block"></div>
</div>
<div class="pagenumbers" id="pagination" style="display: none"></div>

<div id="modal-container"></div>

<!-- <div class="list" id="list"></div> -->

<div class="cart__container">
  <div class="list__cart">
    <div class="cart__header">
      <p class="cart__btnClose">
        <i class="fa-solid fa-xmark"></i>
      </p>
      <div class="cart__heading">
        <span>Giỏ Hàng</span>
      </div>
    </div>
    <div class="cart__noCart">
      Giỏ hàng của bạn đang trống
      <img src="https://bengo.vn/static/version1650994791/frontend/MageBig/martfury_layout01/vi_VN/images/empty-cart.svg" alt="" />
    </div>
    <div class="cart__items"></div>
  </div>
  <div class="cart__overlay"></div>
</div>
<script src="./js/showProductDetail.js"></script>
<script src="./js/slideBanner.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/cart_ajax.js"></script>