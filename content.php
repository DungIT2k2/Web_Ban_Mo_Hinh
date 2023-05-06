<div class="Content_SP header_content">
            <div class="header_DoanhThu">
                Danh Sách Sản Phẩm

            </div>
            <table>
                <thead>
                    <tr>
                        <!-- <th class="column5">STT</th> -->
                        <th class="column10">Mã Sản Phẩm</th>
                        <th class="column25">Tên Sản Phẩm</th>
                        <th class="colu10">Hình Ảnh</th>
                        <th class="column40">Chi Tiết</th>
                        <th class="column10">Giá</th>
                        <th class="column10">Thao Tác</th>
                    </tr>
                <tbody>
                </tbody>
            </thead>
            </table>
            <ul class="pagenumber">
            </ul>
        </nav> 
        </div>
        <div class="Content_User header_content">
            <table>
                <thead>
                    <tr>
                        <th class="column5">STT</th>
                        <th class="column5">ID</th>
                        <th class="column10">Tên tài khoản</th>
                        <th class="column10">Mật khẩu</th>
                        <th class="column15">Họ và tên tài khoản</th>
                        <th class="column15">Email</th>
                        <th class="column10">Số điện thoại</th>
                        <th class="column20">Địa chỉ</th>
                        <th class="column10">Ngày tạo</th>
                        <th class="column10">Trạng Thái</th>
                    </tr>
                <tbody>

                </tbody>
                </thead>
            </table>
        </div>
        <div class="Content_Orders header_content">
            <div class="header_DoanhThu">
                Danh Sách Đơn Hàng
            </div>
            <span class="   ">Lọc: </span>
            <span class="loc_orders">Từ</span>
            <input type="date" class = "Date" id="fromDate">
            <span class="loc_orders">Đến</span>
            <input type="date" class = "Date" id="toDate">
            <select name="" id="" class="select__loc">
                <option value="all">Tất cả</option>
                <option value="chuaxacnhan">chưa xác nhận</option>
                <option value="daxacnhan">đã xác nhận</option>
            </select>
            <button class = "find_Orders" id="btn_find_Orders">Tìm</button>
            <table>
                <thead>
                    <tr>
                        <th class="column5">STT</th>
                        <th class="column5">Mã đơn hàng</th>
                        <th class="column10">Tên tài khoản người đặt</th>
                        <th class="column10">SĐT người đặt</th>
                        <th class="column15">Địa chỉ giao hàng</th>
                        <th class="column10">Ngày đặt hàng</th>
                        <th class="column10">Tổng tiền</th>
                        <th class="column5">Xác nhận</th>
                        <th class="column5">Chi tiết</th>
                        
                    </tr>
                <tbody>
                </tbody>
                </thead>
            </table>
        </div>
        <div class="Content_DoanhThu header_content">
            <div class="header_DoanhThu">Thống kê doanh số bán hàng</div>
            <div class="header_DoanhThu">
                <span>Năm:</span>
                <select type="combobox" class="cb_thongke">
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>
            <table>
                <thead>
                    <tr>
                        <th class="column5">Tháng</th>
                        <th class="column10">Số đơn hàng</th>
                        <th class="column25">Tổng tiền</th>
                    </tr>
                <tbody class="TK_Data">
                    <tr>
                        <td>1</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </thead>
            </table>
            <ul class="pagenumber">
            </ul>
        </nav> 
        </div>
        <!-- Form add SanPham begin-->
        <form action="" class="form_add_sanpham header_content">
            <div class="Content_form__add_SanPham">
                <div class="view_image">
                    <input type="file" accept="image/jpg" class="btn_addImage_SP" ></input>
                </div>
                <div class="tittle_add_SP"><h1>THÊM SẢN PHẨM</h1></div>
                <!-- <div class="form__item">
                    <span class="labelDetail_SP">MÃ SẢN PHẨM: </span>
                    <input type="text" class="input_SP" id="input_MaSP">
                </div> -->
                <div class="form__item">
                    <span class="labelDetail_SP">TÊN SẢN PHẨM: </span>
                    <input type="text" class="input_SP" id="input_TenSP">
                </div>
                <div class="form__item">
                    <span class="labelDetail_SP">LOẠI SÁCH: </span>
                    <select name="" id="input_LoaiSP" class="input_SP select_books">
                        <option value="NONE">CHỌN</option>
                        <option value="skill_books">KỸ NĂNG</option>
                        <option value="foreign_books">NƯỚC NGOÀI</option>
                        <option value="children_books">TRẺ EM</option>
                    </select>
                </div>
               
                <div class="form__item">
                    <span class="labelDetail_SP">TÁC GIẢ: </span>
                    <input type="text" class="input_SP" id="input_TenTG">
                </div>
                <div class="form__item">
                    <span class="labelDetail_SP">GIÁ SP BAN ĐẦU: </span>
                    <input type="number" class="input_SP" id="input_GiaSP_bandau">
                </div>
                <div class="form__item">
                    <span class="labelDetail_SP">GIÁ SP BÁN RA: </span>
                    <input type="number" class="input_SP" id="input_GiaSP_banra">
                </div>
                 <div class="form__item">
                    <span class="labelDetail_SP">CHI TIẾT: </span>
                    <textarea name="" class="txtArea_ChiTiet" id="txtArea_ChiTiet" cols="30" rows="10"></textarea>
                </div>
                <button class="btn_XacNhan_Add_SP" id="btn_XacNhan_Add_SP">XÁC NHẬN</button>
            </div>
                <!-- form add SanPham end -->
         </form>
         <!-- form chinh sua thong tin san pham start-->
         <form action="">
            <div class="overplay_ChinhSuaSP">
                <div class="overplay__behind_ChinhSuaSP"></div>
                    <div class="form__ChinhSuaSP">
                        <div class="main_title">THÔNG TIN SẢN PHẨM</div>
                        <div class="form__item_ChinhSua">
                            <div class="form__item_ChinhSua">
                                <span class="lableDetail__ChinhSua">LOẠI SÁCH: </span>
                                <select name="" id="book_type_seleted" class="input_ChinhSua select_books">
                                    <option value="skill_books">KỸ NĂNG</option>
                                    <option value="foreign_books">NƯỚC NGOÀI</option>
                                    <option value="children_books">TRẺ EM</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__item_ChinhSua">
                            <span class="lableDetail__ChinhSua">MÃ SẢN PHẨM: </span>
                            <input type="text" class="input_ChinhSua" id="maSP_ChinhSua" disabled >
                        </div>
                            <div class="form__item_ChinhSua">
                                <span class="lableDetail__ChinhSua">TÊN SP: </span>
                                <input type="text" class="input_ChinhSua" id="tenSP_ChinhSua">
                            </div>
                            <div class="form__item_ChinhSua">
                                <span class="lableDetail__ChinhSua">TÁC GIẢ: </span>
                                <input type="text" class="input_ChinhSua" id="tacgiaSP_ChinhSua">
                            </div>
                            <div class="form__item_ChinhSua">
                                <span class="lableDetail__ChinhSua">GIÁ BAN ĐẦU: </span>
                                <input type="number" class="input_ChinhSua" id="giabandauSP_ChinhSua">
                            </div>
                            <div class="form__item_ChinhSua">
                                <span class="lableDetail__ChinhSua">GIÁ BÁN RA: </span>
                                <input type="number" class="input_ChinhSua" id="giabanraSP_ChinhSua">
                            </div>
                            <div class="form__item_ChinhSua">
                                <span class="lableDetail__ChinhSua">CHI TIẾT: </span>
                                <textarea name="" class="txtArea_ChiTiet_ChinhSua" id="txtArea_ChiTiet_ChinhSua" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form__item_ChinhSua">
                                <button class="btn_confirm_ChinhSua">XÁC NHẬN</button>
                            </div>
                        </div>
                    </div>
            </div>
         </form>
         <!-- form chinh sua thong tin san pham end-->
         <!-- form chi tiet don hang start-->
         <form action="">
            <div class="overplay_OrderDetail">
                <div class="overplay__behind_OrderDetail"></div>
                <div class="form_OrdersDetail">
                    <div class="title_OrderDetail">
                        THÔNG TIN ĐƠN HÀNG
                    </div>
                    <div class="form_OrderDetail_item">
                        <div class="btn_X">X</div>
                    </div>
                    <div class="form_OrderDetail_item">
                        <span class="lableDetail__OrderDetail">Mã Đơn hàng: </span>
                        <span  class="input_OrderDetail" id="maDonHang"></span>
                    </div>
                    <div class="form_OrderDetail_item">
                        <span class="lableDetail__OrderDetail">Tên người đặt:</span>
                        <span class="input_OrderDetail" id="tenNguoidat"></span>
                    </div>
                    <div class="form_OrderDetail_item">
                        <span class="lableDetail__OrderDetail">SĐT người đặt:</span>
                        <span class="input_OrderDetail" id="sdtNguoidat"></span>
                    </div>
                    <div class="form_OrderDetail_item">
                        <span class="lableDetail__OrderDetail">Địa chỉ giao hàng:</span>
                        <span class="input_OrderDetail" id="diaChiGiaohang"></span>
                    </div>
                    <div class="form_OrderDetail_item">
                        <span class="lableDetail__OrderDetail">Chi tiết đơn hàng:</span>
                        <span class="input_OrderDetail" id="chitietDonHang"></span>
                    </div>
                    <div class="form_OrderDetail_item">
                        <span class="lableDetail__OrderDetail">Tổng tiền:</span>
                        <span class="input_OrderDetail" id="tongtien"></span>
                    </div>
                </div>
            </div>
         </form>
         <!-- form chi tiet don hang end -->
    </div>