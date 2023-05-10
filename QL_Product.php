<link rel="stylesheet" href="./css/Admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<div class="Content_SanPham header_content">
    <div class="header_DoanhThu">DANH SÁCH SẢN PHẨM</div>
    <div class="btn_SP">
        <button class="btn_add_sp">THÊM SẢN PHẨM MỚI</button>
    </div>
    <div class="clear" style="clear: both;"></div>
    <div class="clear_both"></div>
    <table>
        <thead>
            <tr>
                <th class="column5">ID</th>
                <th class="column15">Hình ảnh</th>
                <th class="column10">Loại</th>
                <th class="column10">TênSP</th>
                <th class="column15">Chi tiết SP</th>
                <th class="column5 th_header">Số lượng
                    <div class="btn_header">
                        <i class="fas fa-caret-up sort_btn_SL" onclick="sortData('Amount','asc')"></i>
                        <i class="fas fa-caret-down sort_btn_SL" onclick="sortData('Amount','desc')"></i>
                    </div>
                </th>
                <th class="column15 th_header">Giá (VND)
                    <div class="btn_header" style="margin-left: -5px">
                        <i class="fas fa-caret-up sort_btn_price" onclick="sortData('Price','asc')"></i>
                        <i class="fas fa-caret-down sort_btn_price" onclick="sortData('Price','desc')"></i>
                    </div>
                </th>
                <th class="column5">Thao tác</th>
            </tr>

        </thead>
        <tbody id="product-list">
            <?php include("./DAL/DAL_QL_Product.php") ?>
        </tbody>
    </table>
    <!-- form them thong tin san pham start-->
    <form action="./DAL/DAL_Add_Product.php" method="post" enctype="multipart/form-data">
        <!-- action="./DAL/DAL_Add_Product.php -->
        <div class="overplay_addSP">
            <div class="overplay__behind_addSP"></div>
            <div class="form__addSP">

                <div class="main_title">ĐIỀN THÔNG TIN SẢN PHẨM</div>


                <!-- <div class="form__item_addSP">
                    <span class="lableDetail__addSP">ID: </span>
                    <input type="text" class="input_addSP" id="ID_addSP" name="ID_addSP">
                </div> -->
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">LOẠI SẢN PHẨM: </span>
                    <select name="product_type_selected" id="input_LoaiSP" class="input_SP select_books">
                        <?php include("./DAL/DAL_Loai_SP.php") ?>
                    </select>
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">HÌNH ẢNH :</span>
                    <input type="file" id="image_input" name="image_input">
                </div>

                <div class="form__item_addSP">
                    <div class="display_img_product" id="display_img_product"></div>
                </div>

                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">TÊN SP : </span>
                    <input type="text" class="input_addSP" id="tenSP_addSP" name="tenSP_addSP">
                </div>

                <!-- <div class="form__item_addSP">
                    <span class="lableDetail__addSP">NHÂN VẬT : </span>
                    <input type="text" class="input_addSP" id="tenNVSP_addSP" name="nvSP_addSP">
                </div> -->
                <!-- <div class="form__item_addSP">
                    <span class="lableDetail__addSP">ANIME/MANGA: </span>
                    <input type="text" class="input_addSP" id="AnimeSP_addSP" name="animeSP_addSP">
                </div> -->
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">CHIỀU CAO : </span>
                    <input type="text" class="input_addSP" id="HeightSP_addSP" name="heightSP_addSP">
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">CÂN NẶNG : </span>
                    <input type="text" class="input_addSP" id="WeightSP_addSP" name="weightSP_addSP">
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">CHẤT LIỆU : </span>
                    <input type="text" class="input_addSP" id="MaterialSP_addSP" name="materialSP_addSP">
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">CHI TIẾT : </span>
                    <textarea class="txtArea_ChiTiet_addSP" id="txtArea_ChiTiet_addSP" name="ChiTiet" cols="30"
                        rows="10"></textarea>
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">SỐ LƯỢNG : </span>
                    <input type="number" min="0" class="input_addSP" id="soluongSP_addSP" name="soluongSP_addSP">
                </div>

                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">GIÁ(VND) : </span>
                    <input type="number" min="0" class="input_addSP" id="giaSP_addSP" name="giaSP_addSP">
                </div>


                <div class="form__item_addSP">
                    <input type="submit" value="XÁC NHẬN" name="btn_confirm_add_sp"
                        class="btn_confirm_add_sp btn_confirm_add_sp_MHNV">
                </div>
            </div>
        </div>
</div>
</form>

<!-- form chinh sua thong tin san pham start-->
<form action="./DAL/DAL_Update_Product.php" method="post" enctype="multipart/form-data">
    <div class="overplay_ChinhSuaSP">
        <div class="overplay__behind_ChinhSuaSP"></div>
        <div class="form__ChinhSuaSP">
            <div class="main_title">SỬA THÔNG TIN SẢN PHẨM</div>
            <div class="form__item_ChinhSua">
                <span class="lableDetail__ChinhSua">ID SẢN PHẨM: </span>
                <input type="text" class="input_ChinhSua" id="maSP_ChinhSua" name="ID_ChinhSua" readonly>
            </div>
            <div class="form__item_ChinhSua">
                <div class="form__item_ChinhSua">
                    <span class="lableDetail__ChinhSua">LOẠI SẢN PHẨM: </span>
                    <select name="loaiSP_ChinhSua" id="loaiSP_ChinhSua" class="input_ChinhSua select_books">
                        <?php include("./DAL/DAL_Loai_SP.php") ?>
                    </select>
                </div>
            </div>

            <div class="form__item_ChinhSua">
                <span class="lableDetail__addSP">HÌNH ẢNH :</span>
                <input type="file" id="image_input_SSP" name="image_input_SSP">
            </div>
            <div class="form__item_ChinhSua">
                <div class="display_img_product" id="display_img_product_SSP" name="display_img_UD"></div>
            </div>
            <div class="form__item_ChinhSua" style="display:none">
                <input type="text" id="temp_file_img" name="temp_file_img_UD">
            </div>

            <div class="form__item_ChinhSua">
                <span class="lableDetail__ChinhSua">TÊN SP: </span>
                <input type="text" class="input_ChinhSua" id="tenSP_ChinhSua" name="tenSP_UD">
            </div>
            <div class="form__item_ChinhSua">
                <span class="lableDetail__ChinhSua">SỐ LƯỢNG: </span>
                <input type="number" class="input_ChinhSua" id="soLuongSP_ChinhSua" name="soLuong_UD">
            </div>
            <div class="form__item_ChinhSua">
                <span class="lableDetail__ChinhSua">GIÁ BÁN RA: </span>
                <input type="number" class="input_ChinhSua" id="giabanraSP_ChinhSua" name="gia_UD">
            </div>
            <div class="form__item_ChinhSua">
                <span class="lableDetail__ChinhSua" style="margin-right:10px">CHI TIẾT: </span>
                <textarea name="chiTiet_UD" class="txtArea_ChiTiet_ChinhSua" id="txtArea_ChiTiet_ChinhSua" cols="30"
                    rows="10"></textarea>
            </div>
            <div class="form__item_ChinhSua">
                <span class="lableDetail__ChinhSua">CHIỀU CAO : </span>
                <input type="text" class="input_ChinhSua" id="HeightSP_ChinhSua" name="heightSP_ChinhSua">
            </div>
            <div class="form__item_ChinhSua">
                <span class="lableDetail__ChinhSua">CÂN NẶNG : </span>
                <input type="text" class="input_ChinhSua" id="WeightSP_ChinhSua" name="weightSP_ChinhSua">
            </div>
            <div class="form__item_ChinhSua">
                <span class="lableDetail__ChinhSua">CHẤT LIỆU : </span>
                <input type="text" class="input_ChinhSua" id="MaterialSP_ChinhSua" name="materialSP_ChinhSua">
            </div>
            <div class="form__item_ChinhSua">
                <button type="submit" class="btn_confirm_ChinhSua">XÁC NHẬN</button>
            </div>
        </div>
    </div>
    </div>
</form>
<!-- form chinh sua thong tin san pham end-->

<script src="./js/QL_Product.js?v=<?php echo time(); ?>"></script>
</div>