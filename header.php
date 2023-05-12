<?php
session_start();
?>
<link rel="stylesheet" href="./css/global.css">
<link rel="stylesheet" href="./css/modal.css" />
<link rel="stylesheet" href="./css/pagination.css" />
<link rel="stylesheet" href="./css/responsive.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" type="image/x-icon" href="/img/img_favicon_cir.png">
<header class="header">
  <div class="header__logo__img">
    <div class="header__logo">
      <a href="index.php " class="">
        <img alt="img-logo" src="./img/Logo.png" />
      </a>
    </div>
  </div>
  <div class="header__content">
    <div class="header__menu">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="header__search">
      <input class="header__search__input" type="text" placeholder="Tìm sản phẩm mong muốn" />
      <span class="header__search__btn">
        <i class="fa-solid fa-magnifying-glass"></i>
      </span>
    </div>
    <div class="header__right">
    <?php
        if (isset($_SESSION['login']['id'])) {
        ?>
      <div class="shopping_bag" onclick='show_dondadat(<?php echo $_SESSION['login']['id']; ?>)'>
        <i class='fas fa-shopping-bag' style='font-size:24px'></i>
        <span>Đơn đã đặt</span>
      </div>
      <?php
        }
      ?>
      <div class="cart">
        <i class="fa-sharp fa-solid fa-cart-shopping img_cart"></i>
        <p class="cart__counter">0</p>
        <span>Giỏ Hàng</span>
      </div>

      <div class="header__login">
        <div class="header__login-img">
          <!-- <i class="fa-regular fa-user header__login-icon show"></i> -->
          <!-- <img alt="img-avata" class="header__login_avatar" src="./img/avt_login.png" /> -->
          <!-- <ul class="header__login-menu">
            <li>
              <button class="header__login-btn-login" onclick="document.location='dangnhap.php'">Đăng Nhập</button>
            </li>
            <li>
              <button class="header__login-btn-register" onclick="document.location='dangki.php'">Đăng Ký</button>
            </li>
          </ul> -->
          <!-- <ul class="header__login-user-menu">
            <li class="header__login-go-to-admin">
              <a href="./admin2/Admin.html">Đi đến Admin</a>
            </li>
            <li class="header__login-info">Thông tin của tôi</li>
            <li class="header__login-order">Đơn mua</li>
            <li class="header__login-logout">Đăng Xuất</li>
          </ul> -->
        </div>
        <div class="info">
          <div class="info__overlay" id="if_overlay"></div>
          <div class="info__container" id="if_container">
            <p class="info__btnClose" id="btn_if_close">
              <i class="fa-solid fa-xmark"></i>
            </p>
            <h3 class="info__containe__heading">THÔNG TIN TÀI KHOẢN</h3>

            <form action="" onsubmit="return false">
              <div class="info__main">
                <div class="info__user">
                  <div class="form_group">
                    <label for="">Họ và Tên</label>
                    <input id="info_name" type="text" placeholder="" required value="<?php echo $_SESSION['login']['name'] ?>" disabled />
                    <span class="form_message"></span>
                  </div>
                  <div class="form_group">
                    <label for="">Số điện thoại</label>
                    <input id="info_sdt" type="number" pattern="[0-9]{10}" placeholder="0912345678" required value="<?php echo $_SESSION['login']['sdt'] ?>" />
                    <span class="form_message"></span>
                  </div>
                  <div class="form_group">
                    <label for="">Địa Chỉ</label>
                    <input id="info_diachi" type="text" placeholder="123 đường A, phường B, quận C" required value="<?php echo $_SESSION['login']['diachi'] ?>" />
                    <span class="form_message"></span>
                  </div>
                </div>
              </div>
              <div class="form__info-btn-save">
                <button id="btn_save_info">Lưu Thông Tin</button>
              </div>
            </form>
          </div>
        </div>
        <?php
        if (isset($_SESSION['login']['name'])) {
        ?>
          <i class="header__menu-item-icon fa-regular fa-user"></i>
          <?php
          echo '<div class="info_user" id="info">' . $_SESSION['login']['name'] . '</div>';
          if (isset($_SESSION['login']['role'])) {
            if (($_SESSION['login']['role']) != "User") {
          ?>
              <div><button class="btn_header" onclick="document.location='admin.php'">Đến Trang Quản Lý</button>
            <?php
            }
          }
            ?>
            <button class="btn_header btn_dangxuat" onclick="document.location='logout.php'">Đăng Xuất</button>
              </div>
            <?php
          } else {
            ?>
              <button class="btn_header" id="btn_dangnhap" onclick="document.location='dangnhap.php'">Đăng Nhập</button>

      </div>
      <div class="header__login-title-login"><span>Hoặc</span></div>
      <div><button class="btn_header" onclick="document.location='dangki.php'">Đăng Ký</button></div>
    <?php } ?>
    </div>
    <div class="overplay"></div>
  </div>
</header>
