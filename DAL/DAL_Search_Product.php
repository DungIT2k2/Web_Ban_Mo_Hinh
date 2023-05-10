<?php
if(isset($_POST['loai'])){
    $loai = $_POST['loai'];
}
function getSearchAll(){
    $tensp = $_POST['tensp'];
    $kieugia = $_POST['kieugia'];
    $idcaterogy = $_POST['caterogy'];
    $to_gia = $_POST['to'];
    $from_gia = $_POST['from'];
    $path = "./DAL/Image_SanPham/";
    include("./DAL_Connect.php");
    $sql = "SELECT * FROM product sp
    JOIN caterogyproduct loaisp ON sp.IDCaterogyProduct = loaisp.IDCaterogyProduct
    WHERE NameProduct LIKE '%".$tensp."%' ";
    if ($idcaterogy != 0){
        $sql .= "AND sp.IDCaterogyProduct='".$idcaterogy."' ";
    } 
    $sql .= "AND Price BETWEEN "; 
    if($to_gia != ""){
        $sql .= $to_gia;
    }
    else{
        $sql .= "(SELECT MIN(price) FROM product)";
    }
    $sql .= " AND ";
    if($from_gia != ""){
        $sql .= $from_gia;
    }
    else{
        $sql .= "(SELECT MAX(price) FROM product) ";
    }
    $sql .= " ORDER BY Price ".$kieugia;
    $result = $conn->query($sql);
    $soluongsp = $result->num_rows;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $srcImg = $path . $row['Image'];
                echo "<div class=\"container__row-card\" onclick=\"showItemDetail('" . $row['NameProduct'] . "', " . $row['Amount'] . ",'" . $row['CharacterName'] . "', '" . $row['AnimeOrMangaOrGameFPS'] . "', '" . $row['Height'] . "', '" . $row['Weight'] . "', '" . $row['Material'] . "', '" . $row['ProductDetail'] . "', '" . $srcImg . "', " . $row['Price'] . ", '" . $row['ProductID'] . "')\">";
                echo "<div class=\"product__price--percent\">";
                echo "<p>10%";
                echo "<p>";
                echo "</div>";
                echo "<img src=\"" . $path . $row['Image'] . "\" class=\"product-image\">";
                echo "<div id = \"name_product\" class=\"container__row-card-title\" data-name=\"" . $row['NameProduct'] . "\">" . $row['NameProduct'] . "</div>";
                echo "<div class=\"card__footer\">";
                $price_mutiple_10perent = doubleval($row['Price']) * 0.1;
                $price_before_discount_10percent = $row['Price'] + $price_mutiple_10perent;
                $price = $row['Price'];
                $formatted_price = number_format($price, 0, ',', '.');
                $formatted_price_before_discount_10percent = number_format($price_before_discount_10percent, 0, ',', '.');
                echo "<div class=\"card__item__Price\">" . $formatted_price_before_discount_10percent . " đ"."</div>";
                echo "<div class=\"container__row-card-price\">" . $formatted_price . " đ" . "</div>";
                echo '</div>';
                echo '</div>';
            }
            echo '<ul class="pagenumber">';
            echo '</ul>';
            } else {
                echo "Không tìm thấy sản phẩm!";
            }
            $conn->close();
}

function phantrang(){
    $tensp = $_POST['tensp'];
    $kieugia = $_POST['kieugia'];
    $idcaterogy = $_POST['caterogy'];
    $to_gia = $_POST['to'];
    $from_gia = $_POST['from'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    include("./DAL_Connect.php");
    $sql = "SELECT * FROM product sp
    JOIN caterogyproduct loaisp ON sp.IDCaterogyProduct = loaisp.IDCaterogyProduct
    WHERE NameProduct LIKE '%".$tensp."%' ";
    if ($idcaterogy != 0){
        $sql .= "AND sp.IDCaterogyProduct='".$idcaterogy."' ";
    } 
    $sql .= "AND Price BETWEEN "; 
    if($to_gia != ""){
        $sql .= $to_gia;
    }
    else{
        $sql .= "(SELECT MIN(price) FROM product)";
    }
    $sql .= " AND ";
    if($from_gia != ""){
        $sql .= $from_gia;
    }
    else{
        $sql .= "(SELECT MAX(price) FROM product) ";
    }
    $sql .= " ORDER BY Price ".$kieugia;
    $result = $conn->query($sql);
    $soluongsp = $result->num_rows;
    $sotrang = ceil($soluongsp/3);
    
    if ($sotrang > 3){
        echo '<li class="pagenumber_item" onclick="backRenderPageNumber(\''.$tenloaisp.'\','.$start.')">';
        echo '<a class="pagenumber_item_link fa fa-angle-left"></a></li>';
    if($end > $sotrang){
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

}
if($loai == "getsearch"){
    getSearchAll();
}


?>