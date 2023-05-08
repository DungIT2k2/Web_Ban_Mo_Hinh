<?php
    $tenloaisp = $_POST['tenloaisp'];
    include("./DAL_Connect.php");
    $sql = 'SELECT * FROM product sp JOIN caterogyproduct lsp ON sp.IDCaterogyProduct = lsp.IDCaterogyProduct WHERE NameCaterogyProduct="'.$tenloaisp.'"';
    $result = $conn->query($sql);
    $soluongsp = $result->num_rows;
    $sotrang = $soluongsp;
    echo '<ul class="pagenumber">';
    if ($soluongsp > 3){
        echo '<li class="pagenumber_item" onclick="backRenderPageNumber()">';
        echo '<a class="pagenumber_item_link fa fa-angle-left"></a></li>';
    }
    for ($i = 1; $i <= $sotrang; $i++){
        echo '<li class="pagenumber_item" onclick="handlePageNumber('.$i.')">';
        echo '<a class="pagenumber_item_link">'.$i.'</a></li>';
    }
    if ($soluongsp > 3){
        echo '<li class="pagenumber_item" onclick="nextRenderPageNumber()">';
        echo '<a class="pagenumber_item_link fa fa-angle-right" id="angle_right"></a></li>';
    }
    echo '</ul>';
    $conn->close();
?>