<link rel="stylesheet" href="./css/global.css">
<link rel="stylesheet" href="./css/modal.css">
<div class="container__row">
    <?php
    global $path;
    global $soluong;
    $path = "./DAL/Image_SanPham/";
    include("./DAL/DAL_Connect.php");
    if (isset($_GET['idmh'])) {
        switch ($_GET['idmh']) {
            case '7':
                $sql = "SELECT * FROM `product` WHERE IDCaterogyProduct = '7'";
                $result = $conn->query($sql);
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
                } else {
                    echo "Không có sản phẩm!";
                }
                $conn->close();
                break;
            case '8':
                $sql = "SELECT * FROM `product` WHERE IDCaterogyProduct = '8'";
                $result = $conn->query($sql);
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
                } else {
                    echo "Error!";
                }
                $conn->close();
                break;
            case '9':
                $sql = "SELECT * FROM `product` WHERE IDCaterogyProduct = '9'";
                $result = $conn->query($sql);
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
                        echo "<div class=\"card__item__Price\">" . $formatted_price_before_discount_10percent . "đ"."</div>";
                        echo "<div class=\"container__row-card-price\">" . $formatted_price . " đ" . "</div>";
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Không có sản phẩm!";
                }
                $conn->close();
                break;
            case '10':
                $sql = "SELECT * FROM `product` WHERE IDCaterogyProduct = '10'";
                $result = $conn->query($sql);
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
                } else {
                    echo "Không có sản phẩm!";
                }
                $conn->close();
                break;
            case '16':
                $sql = "SELECT * FROM `product` WHERE IDCaterogyProduct = '16'";
                $result = $conn->query($sql);
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
                } else {
                    echo "Không có sản phẩm!";
                }
                $conn->close();
                break;
            case 'all_nv':

                $sql = "SELECT * FROM `product` WHERE IDCaterogyProduct IN ('7','8','9','10','16')";
                $result = $conn->query($sql);
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
                        echo "<div class=\"card__item__Price\">" . $formatted_price_before_discount_10percent ." đ". "</div>";
                        echo "<div class=\"container__row-card-price\">" . $formatted_price . " đ" . "</div>";
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Không có sản phẩm!";
                }
                $conn->close();
                break;
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/showProductDetail.js"></script>
</div>