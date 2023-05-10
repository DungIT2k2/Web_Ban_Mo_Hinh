<?php
    $tenloaisp = $_POST['tenloaisp'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $check = false;
    include("./DAL_Connect.php");
    $sql = 'SELECT * FROM product sp JOIN caterogyproduct lsp ON sp.IDCaterogyProduct = lsp.IDCaterogyProduct WHERE NameCaterogyProduct="'.$tenloaisp.'"';
    $result = $conn->query($sql);
    $soluongsp = $result->num_rows;
    if ($soluongsp%3 == 0){
        $sotrang = $soluongsp/3;
    }
    else{
        $sotrang = ceil($soluongsp/3);
    }   
    if ($sotrang > 3){
        echo '<li class="pagenumber_item" onclick="backRenderPageNumber(\''.$tenloaisp.'\','.$start.')">';
        echo '<a class="pagenumber_item_link fa fa-angle-left"></a></li>';
    if($end+1 > $sotrang){
        $temp_end = $end;
        $end = $sotrang;
        $check = true;
    }
    for ($i = $start; $i <= $end; $i++){
        echo '<li class="pagenumber_item" onclick="handlePageNumber(\''.$tenloaisp.'\','.$i.')">';
        echo '<a class="pagenumber_item_link">'.$i.'</a></li>';
    }
    if ($check == true){
        echo '<li class="pagenumber_item" onclick="nextRenderPageNumber(\''.$tenloaisp.'\','.($start-1).')">';
        echo '<a class="pagenumber_item_link fa fa-angle-right" id="angle_right"></a></li>';
    }
    else{
        echo '<li class="pagenumber_item" onclick="nextRenderPageNumber(\''.$tenloaisp.'\','.$end.')">';
        echo '<a class="pagenumber_item_link fa fa-angle-right" id="angle_right"></a></li>';
    }
    }else {
        for ($i = 1; $i <= $sotrang; $i++){
        echo '<li class="pagenumber_item" onclick="handlePageNumber(\''.$tenloaisp.'\','.$i.')">';
        echo '<a class="pagenumber_item_link">'.$i.'</a></li>';
        }
    }
    $conn->close();
?>
