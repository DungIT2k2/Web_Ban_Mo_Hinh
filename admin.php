<?php session_start();
if (isset($_SESSION['login']['role'])) {
    echo '<script>var role="' .$_SESSION['login']['role'].'";</script>';
    $check = false;
    if($_SESSION['login']['role'] == "User"){
        $check = true;
    }
}
else{
    echo '<script>var role="";</script>';
    $check = true;
}
?>

<link rel="stylesheet" href="./css/Admin.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>
    <div class="Menu">
        <nav class="sidebar">
            <div class="Header">
                <?php
                if (isset($_SESSION['login']['name'])) {
                    if($check == true){

                    }
                    else {
                ?>
                    <a class='user_name'><i class="user_name_icon fa-regular fa-user"></i><?php echo $_SESSION['login']['name']?></a>
                    <a class='user_name_role'>(<?php echo $_SESSION['login']['role']?>)</a>
                <?php }
                }
                ?>
                <!-- <img src="" , height=30px></img> -->
                <!-- ADMIN CENTER -->

            </div>
            <ul>
                <li>
                    <a href="" class="btn_sanpham" id="SP"><i class="fa-solid fa-book"></i>Quản Lý Sản Phẩm</a>
                </li>
                <li>
                    <a href="" class="btn_Orders" id="DH"><i class="fa-solid fa-clipboard-list"></i>Quản Lý Đơn Hàng</a>
                </li>
                <li>
                    <a href="" class="btn__users btn_User" id="User"> <i class="fa-solid fa-users"></i>Quản Lý User</a>
                </li>
                <li>
                    <a href="" class="btn__Quyen" id="PQ"> <i class="fa-solid fa-users"></i>Quản Lý Quyền</a>
                </li>
                <li>
                    <a href="" class="btn_Doanhthu" id="DT"><i class=" fa-solid fa-chart-pie"></i>Doanh Thu</a>
                </li>
                <li>
                    <a href="index.php" class="btn__backHomePage btn_Back"><i class="fa-solid fa-left-long"></i>Quay Lại Trang Chủ</a>
                </li>
                <li>
                    <a href="logout.php" class="btn__logout btn_LogOut"><i class="fa-solid fa-right-from-bracket"></i>Đăng Xuất</a>
                </li>
                <!-- <li ><a href="#" class="btn__users btn_User">Quản Lý User</a></li>
                <li><a href="#" class="btn_doanhthu">Doanh Thu</a></li>
                <li ><a href="#" class="btn__backHomePage btn_Back">Quay Lại Trang Bán Hàng</a></li>
                <li ><a href="#" class="btn__logout btn_LogOut">Đăng Xuất</a></li> -->
            </ul>
        </nav>
    </div>
    <!-- <header >
        <div class="header__search">
            <form class="header__search__form">
                <input type="text" placeholder="search ...">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
    </div>

        <div class="header__account">
            <img src="../Images/avt_login.png" alt="">
            <p class="header__account__name">admin</p>
        </div>
    </header> -->
    <div class="Content">
        <?php include("content_admin.php") ?>
        <!-- <script src="../js/data.js"></script> -->
        <!-- <script src="./Admin.js"></script> -->
        <!-- <script src="./js/admin.js"></script> -->

</body>
<script src="./js/admin.js"></script>