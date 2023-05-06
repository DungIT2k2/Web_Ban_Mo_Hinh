<?php
if (isset($_GET['chon'])){
    switch ($_GET['chon']){
        case 'nv':
            if (isset($_GET['id'])) {
                switch ($_GET['id']) {
                    case '1':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình Naruto");
                        include("product_list.php");
                        
                        break;
                    case '2':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình Onepiece");
                        include("product_list.php");
                        break;
                    case '3':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình League of Legend");
                        include("product_list.php");
                        break;
                    case '4':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình Dragon Ball");
                        include("product_list.php");
                        break;
                    case '5':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình Kamen Rider");
                        include("product_list.php");
                        break;
                }
            }
            break;
        case 's':
            if (isset($_GET['id'])) {
                switch ($_GET['id']) {
                    case '1':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình AR");
                        break;
                    case '2':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình Pistol");
                        break;
                    case '3':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình SMG");
                        break;
                    case '4':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình SR");
                        break;
                    case '5':
                        echo '<style>#banner { display:none;}</style>';
                        echo ("Mô hình Shotgun");
                        break;
                }
            }
            break;
    }
}
?>