<link rel="stylesheet" href="./css/Admin.css">

<div class="Content_SanPham header_content">
    <h2 style="text-align : center">Danh sach san pham</h2>
    <button class="btn_add_sp btn_add_sp_MHNV">THÊM NHÂN VẬT</button>
    <button class="btn_add_sp btn_add_sp_MHS">THÊM SÚNG</button>


    <table>
        <thead>
            <tr>
                <th class="column5">ID</th>
                <th class="column15">Hình ảnh</th>
                <th class="column10">Loại</th>
                <th class="column10">TênSP</th>
                <th class="column15">Chi tiết SP</th>
                <th class="column5">Số lượng</th>
                <th class="column15">Giá (VND)</th>
                <th class="column5">Thao tác</th>
            </tr>
        <tbody>
            <?php include("./DAL/DAL_QL_Product.php") ?>
        </tbody>
        </thead>
    </table>
    <!-- form chinh sua thong tin san pham start-->
    <form action="./DAL/DAL_Add_Product.php" method="post" enctype="multipart/form-data">
        <!-- action="./DAL/DAL_Add_Product.php -->
        <div class="overplay_addSP overplay_addSP_MHNV">
            <div class="overplay__behind_addSP overplay__behind_addSP_MHNV"></div>
            <div class="form__addSP">

                <div class="main_title">ĐIỀN THÔNG TIN MÔ HÌNH NHÂN VẬT</div>


                <!-- <div class="form__item_addSP">
                    <span class="lableDetail__addSP">ID: </span>
                    <input type="text" class="input_addSP" id="ID_addSP" name="ID_addSP">
                </div> -->
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">LOẠI SẢN PHẨM: </span>
                    <select name="product_type_selected" id="input_LoaiSP" class="input_SP select_books">
                        <?php include("./DAL/DAL_Loai_SP_mhnv.php") ?>
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


                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">NHÂN VẬT : </span>
                    <input type="text" class="input_addSP" id="tenSP_addSP" name="nvSP_addSP">
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">ANIME/MANGA: </span>
                    <input type="text" class="input_addSP" id="tenSP_addSP" name="animeSP_addSP">
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">CHIỀU CAO : </span>
                    <input type="text" class="input_addSP" id="tenSP_addSP" name="heightSP_addSP">
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">CÂN NẶNG : </span>
                    <input type="text" class="input_addSP" id="tenSP_addSP" name="weightSP_addSP">
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">CHẤT LIỆU : </span>
                    <input type="text" class="input_addSP" id="tenSP_addSP" name="materialSP_addSP">
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">CHI TIẾT : </span>
                    <textarea class="txtArea_ChiTiet_addSP" id="txtArea_ChiTiet_addSP" name="ChiTiet" cols="30" rows="10"></textarea>
                </div>
                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">SỐ LƯỢNG : </span>
                    <input type="number" class="input_addSP" id="soluongSP_addSP" name="soluongSP_addSP">
                </div>

                <div class="form__item_addSP">
                    <span class="lableDetail__addSP">GIÁ(VND) : </span>
                    <input type="number" class="input_addSP" id="" name="giaSP_addSP">
                </div>


                <div class="form__item_addSP">
                    <input type="submit" value="XÁC NHẬN" name="btn_confirm_add_sp_MHNV" class="btn_confirm_add_sp btn_confirm_add_sp_MHNV">
                </div>
            </div>
        </div>
</div>
</form>

<form action="./DAL/DAL_Add_Product.php" method="post" enctype="multipart/form-data">
    <!-- action="./DAL/DAL_Add_Product.php -->
    <div class="overplay_addSP overplay_addSP_MHS">
        <div class="overplay__behind_addSP overplay__behind_addSP_MHS"></div>
        <div class="form__addSP">
            <div class="main_title">ĐIỀN THÔNG TIN SẢN PHẨM MÔ HÌNH SÚNG</div>
            
            <!-- <div class="form__item_addSP">
                <span class="lableDetail__addSP">ID: </span>
                <input type="text" class="input_addSP" id="ID_addSP" name="ID_addSP">
            </div> -->
            <div class="form__item_addSP">
                <span class="lableDetail__addSP">LOẠI SẢN PHẨM: </span>
                <select name="product_type_selected" id="input_LoaiSP" class="input_SP select_books">
                    <?php include("./DAL/DAL_Loai_SP_mhs.php") ?>
                </select>
            </div>
            <div class="form__item_addSP">
                <span class="lableDetail__addSP">HÌNH ẢNH :</span>
                <input type="file" id="image_input_MHS" name="image_input">
            </div>

            <div class="form__item_addSP">
                <div class="display_img_product" id="display_img_product_MHS"></div>
            </div>

            <div class="form__item_addSP">
                <span class="lableDetail__addSP">TÊN SP : </span>
                <input type="text" class="input_addSP" id="tenSP_addSP" name="tenSP_addSP">
            </div>
            <div class="form__item_addSP">
                <span class="lableDetail__addSP">GAME FPS: </span>
                <input type="text" class="input_addSP" id="tenSP_addSP" name="animeSP_addSP">
            </div>
            <div class="form__item_addSP">
                <span class="lableDetail__addSP">CHIỀU CAO : </span>
                <input type="text" class="input_addSP" id="tenSP_addSP" name="heightSP_addSP">
            </div>
            <div class="form__item_addSP">
                <span class="lableDetail__addSP">CÂN NẶNG : </span>
                <input type="text" class="input_addSP" id="tenSP_addSP" name="weightSP_addSP">
            </div>
            <div class="form__item_addSP">
                <span class="lableDetail__addSP">CHẤT LIỆU : </span>
                <input type="text" class="input_addSP" id="tenSP_addSP" name="materialSP_addSP">
            </div>
            <div class="form__item_addSP">
                <span class="lableDetail__addSP">CHI TIẾT : </span>
                <textarea class="txtArea_ChiTiet_addSP" id="txtArea_ChiTiet_addSP" name="ChiTiet" cols="30" rows="10"></textarea>
            </div>


            <div class="form__item_addSP">
                <span class="lableDetail__addSP">SỐ LƯỢNG : </span>
                <input type="number" class="input_addSP" id="soluongSP_addSP" name="soluongSP_addSP">
            </div>

            <div class="form__item_addSP">
                <span class="lableDetail__addSP">GIÁ(VND) : </span>
                <input type="number" class="input_addSP" id="" name="giaSP_addSP">
            </div>
            <div class="form__item_addSP">
                <input type="submit" value="XÁC NHẬN" name="btn_confirm_add_sp_MHS" class="btn_confirm_add_sp btn_confirm_add_sp_MHS">
            </div>
        </div>
    </div>
</form>

<script src="./js/QL_Product.js"></script>
</div>