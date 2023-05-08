
<?php
    global $path;
    global $soluong;
    $path = "./DAL/Image_SanPham/";
    include("./DAL/DAL_Connect.php");
                $sql = "SELECT * FROM `product` WHERE IDCaterogyProduct IN ('1','7','9','10','16')";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $srcImg = $path . $row['Image'];
                        echo "<div class=\"container__row-card\" onclick=\"showItemDetail('" . $row['NameProduct'] . "', " . $row['Amount'] . ",'" . $row['CharacterName'] . "', '" . $row['AnimeOrMangaOrGameFPS'] . "', '" . $row['Height'] . "', '" . $row['Weight'] . "', '" . $row['Material'] . "', '" . $row['ProductDetail'] . "', '" . $srcImg . "', " . $row['Price'] . ", '".$row['ProductID']."')\">";

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
                } 
                $conn->close();
?>