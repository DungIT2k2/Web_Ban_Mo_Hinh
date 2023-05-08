<?php if (isset($_GET['c'])) {
    if ($_GET['c'] == 0) {

?>
        <div class="Content_User header_content">
            <a href="admin.php?id=3&c=them"><button class="btn_themtk">Thêm Tài Khoản</button></a>
            <table>
                <thead>
                    <tr>
                        <th class="column5">ID</th>
                        <th class="column10">Họ</th>
                        <th class="column10">Tên</th>
                        <th class="column15">Email</th>
                        <th class="column15">Password</th>
                        <th class="column10">Quyền</th>
                        <th class="column10">Trạng Thái</th>
                    </tr>
                <tbody>
                    <?php include("./DAL/DAL_QL_User.php") ?>
                </tbody>
                </thead>
            </table>
        </div>
    <?php
    }
    if ($_GET['c'] == 'them') {
    ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="/images/img_favicon_cir.png">
        <link rel="stylesheet" href="./css/dangki_admin.css">
        <form action="./DAL/DAL_dangki_admin.php" method="GET" class="form dangki admin" id="form_dangki_user">

            <div class="form__field">
                <label for="dangki__username"><span class="hidden">Tài Khoản</span></label>
                <input id="dangki_username" type="text" name="username" class="form__input" placeholder="Email" required>
            </div>
            <div class="form__field">
                <label for="dangki__ho"><span class="hidden">Họ</span></label>
                <input id="dangki_ho" type="text" name="ho" class="form__input" placeholder="Họ" required>
            </div>
            <div class="form__field">
                <label for="dangki__ten"><span class="hidden">Tên</span></label>
                <input id="dangki_ten" type="text" name="ten" class="form__input" placeholder="Tên" required>
            </div>

            <div class="form__field">
                <label for="dangki__matkhau"><span class="hidden">Mật Khẩu</span></label>
                <input id="dangki_password" type="password" name="password" class="form__input" placeholder="Mật Khẩu" required>
            </div>
            <div class="form__field">
                <label for="dangki__cf__matkhau"><span class="hidden">Nhập Lại Mật Khẩu</span></label>
                <input id="dangki_cf_password" type="password" name="cf_password" class="form__input" placeholder="Nhập Lại Mật Khẩu" required>
            </div>
            <div class="form__field">
                <label for="dangki__cf__matkhau"><span class="hidden">Quyền</span></label>
                <select name="quyen" id="dangki_quyen" class="select_quyen form__input">
                    <option value="" disabled selected> Chọn Quyền Tài Khoản </option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="Employee">Employee</option>
                </select>
            </div>

            <div class="form__field">
                <input type="submit" value="Đăng Kí" id="btn_dangki_admin" name="btn_DK_admin">
            </div>
        </form>
    <?php
    }
}
?>
<script src="./js/QL_User.js"></script>