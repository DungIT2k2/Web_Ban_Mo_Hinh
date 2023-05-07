<link rel="stylesheet" href="./css/modal.css">
<link rel="stylesheet" href="./css/global.css">
<div class="banner">
  <div class="banner__primary">
    <div class="container-tasbar">
      <ul class="container-tasbar__list">
        <span class="container-tasbar__list-title">DANH MỤC SẢN PHẨM</span>
        <li class="container-tasbar__item">
          <a href="index.php?chon=nv&id=1&idmh=all_nv" class="btn_disable_row_container" onclick="display_none()">
            <span class="container-tasbar__item-text container-tasbar__item-text--bold">Mô Hình Nhân Vật</span>
          </a>
          <i class="container-tasbar__item-icon fa-solid fa-angle-right"></i>
          <ul class="container-tasbar__subnav">
            <a href="index.php?chon=nv&id=1&idmh=7">
              <li class="container-tasbar__subnav-item">Naruto</li>
            </a>
            <a href="index.php?chon=nv&id=2&idmh=16">
              <li class="container-tasbar__subnav-item">One Piece</li>
            </a>
            <a href="index.php?chon=nv&id=3&idmh=10">
              <li class="container-tasbar__subnav-item">League of Legend</li>
            </a>
            <a href="index.php?chon=nv&id=4&idmh=8">
              <li class="container-tasbar__subnav-item">Dragon Ball</li>
            </a>
            <a href="index.php?chon=nv&id=5&idmh=9">
              <li class="container-tasbar__subnav-item">Kamen Rider</li>
            </a>
          </ul>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text container-tasbar__item-text--bold">
            Mô Hình Súng</span>
          <i class="container-tasbar__item-icon fa-solid fa-angle-right"></i>
          <ul class="container-tasbar__subnav">
            <a href="index.php?chon=s&id=1">
              <li class="container-tasbar__subnav-item">AR</li>
            </a>
            <a href="index.php?chon=s&id=2">
              <li class="container-tasbar__subnav-item">Pistol</li>
            </a>
            <a href="index.php?chon=s&id=3">
              <li class="container-tasbar__subnav-item">SMG</li>
            </a>
            <a href="index.php?chon=s&id=4">
              <li class="container-tasbar__subnav-item">SR</li>
            </a>
            <a href="index.php?chon=s&id=5">
              <li class="container-tasbar__subnav-item">Shotgun</li>
            </a>
          </ul>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text">Phụ kiện</span>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text">Gấu Bông</span>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text">Đã qua sử dụng(2ND)</span>
        </li>
        <li class="container-tasbar__item">
          <span class="container-tasbar__item-text">Các Mô Hình Khác</span>
        </li>
      </ul>
    </div>
    <div class="product_content"><?php include("product_content.php") ?></div>
    <div class="container__imgLarge" id="banner">
      <div class="container__imgLarge-wrap">
        <img src="./img/no-img.png" alt="" class="container__imgLarge-img" />
        <img src="./img/no-img.png" alt="" class="container__imgLarge-img" />
        <img src="./img/no-img.png" alt="" class="container__imgLarge-img" />
        <div class="container__imgLarge-wrap-icon">
          <i class="container__imgLarge-icon fa-solid fa-circle-left"></i>
          <i class="container__imgLarge-icon fa-solid fa-circle-right"></i>
        </div>
        <div class="container__imgLarge-wrap-circle">
          <i class="container__imgLarge-icon-circle container__imgLarge-icon-circle active fa-solid fa-circle"></i>
          <i class="container__imgLarge-icon-circle fa-solid fa-circle"></i>
          <i class="container__imgLarge-icon-circle fa-solid fa-circle"></i>
        </div>
      </div>
      <div class="banner__thumbnail">
        <img src="./img/no-img.png" alt="" />
        <img src="./img/no-img.png" alt="" />
        <img src="./img/no-img.png" alt="" />
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
    <div class="cart__noCart" >
      Giỏ hàng của bạn đang trống
      <img src="https://bengo.vn/static/version1650994791/frontend/MageBig/martfury_layout01/vi_VN/images/empty-cart.svg" alt="" />
    </div>
    <div class="cart__items"></div>
  </div>
  <div class="cart__overlay"></div>
</div>
<div class="order">
  <div class="order__overlay"></div>
  <div class="order__container">
    <span class="order__container-btn-close">
      <i class="fa-solid fa-xmark"></i>
    </span>
    <h2 class="order__container__header">
      Đơn hàng đã mua
    </h2>
    <div class="order__content">
      <h3 class="order__container__heading">Bạn chưa từng đặt hàng</h3>
      <img class="order__container__img" src="https://bengo.vn/static/version1650994791/frontend/MageBig/martfury_layout01/vi_VN/images/empty-cart.svg" alt="">
    </div>
    
      
    <table class="table">
      <thead>
        <tr>
          <th class="column1">#</th>
          <th class="column2">Mã đơn hàng</th>
          <th class="column3">Chi tiết</th>
          <th class="column4">Ngày mua</th>
          <th class="column5">Đơn vị vận chuyển</th>
          <th class="column7">Tổng tiền</th>
          <th class="column6">Tình trạng đơn hàng</th>
        </tr>
      </thead>
      <tbody>
        <!-- <tr>
              <th scope="row">1</th>
              <td>R45MD0</td>
              <td class="text-left">
                Pizza Hải Sản Nhiệt Đới (XL x1)<br />Mỳ Ý Cay Hải Sản (x1)
              </td>
              <td>21/11/2020</td>
              <td class="text-left">GiaoHangNhanh</td>
              <td>ML4DL5C1RE0N</td>
              <td style="color: red; font-size: 1.2rem">268.000đ</td>
            </tr> -->
      </tbody>
    </table>
  </div>
</div>
<div class="info">
  <div class="info__overlay"></div>
  <div class="info__container">
    <p class="info__btnClose">
      <i class="fa-solid fa-xmark"></i>
    </p>
    <h3 class="info__containe__heading">THÔNG TIN TÀI KHOẢN</h3>

    <form>
      <div class="info__main">
        <div class="info__user">
          <div class="form_group">
            <label for="">Họ và Tên Đệm</label>
            <input type="text" placeholder="" required />
            <span class="form_message"></span>
          </div>
          <div class="form_group">
            <label for="">Tên</label>
            <input type="text" placeholder="" required />
            <span class="form_message"></span>
          </div>

          <div class="form_group">
            <label for="">Số điện thoại</label>
            <input type="tel" pattern="[0-9]{10}" placeholder="ex: 0123456789" required />
            <span class="form_message"></span>
          </div>
          <div class="form_group">
            <label for="">Ngày sinh</label>
            <input type="date" required />
            <span class="form_message"></span>
          </div>
        </div>
        <div class="address__user">
          <div class="form_group">
            <label for="">Tỉnh/Thành phố </label>
            <select required id="region_id" name="region_id" value="" required>
              <option>Vui lòng chọn</option>
            </select>
          </div>
          <div class="form_group">
            <label for="">Quận/Huyện</label>
            <select required id="city_id" name="city_id" value="" required>
              <option>Vui lòng chọn</option>
            </select>
          </div>
          <div class="form_group">
            <label for="">Xã/Phường</label>
            <select required id="ward_id" name="ward_id" value="" required>
              <option>Vui lòng chọn</option>
            </select>
          </div>
          <div class="form_group">
            <label for="">Số Nhà/Đường/Hẽm</label>
            <input type="text" placeholder="Ví dụ: 1 Đường ABC ..." />
            <span class="form_message"></span>
          </div>
        </div>
      </div>
      <div class="form__info-btn-save">
        <button type="submit">Lưu Thông Tin</button>
      </div>
    </form>
  </div>
</div>
<script src="./js/showProductDetail.js"></script>
<script src="./js/slideBanner.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/cart_ajax.js"></script>
