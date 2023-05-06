<?php if (isset($_GET['id'])) {
    switch ($_GET['id']) {
        case '1':
            include("QL_Product.php");
            break;
        case '2':
            echo ("Quản lí đơn hàng");
            break;
        case '3':   
            include("QL_User.php");
            break;
        case '4';
            include("QL_Quyen.php");
            break;
        case '5':
            break;
    }
}
