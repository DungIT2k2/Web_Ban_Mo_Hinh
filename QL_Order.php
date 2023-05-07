<div class="Content_Orders header_content">
    <div class="header_DoanhThu">
        Danh Sách Đơn Hàng
    </div>
    <span class="">Lọc: </span>
    <span class="loc_orders">Từ</span>
    <input type="date" class="Date" id="fromDate">
    <span class="loc_orders">Đến</span>
    <input type="date" class="Date" id="toDate">
    <button class="find_Orders" id="btn_find_Orders">Tìm</button>
    <table>
        <thead>
            <tr>
                <th class="column5">Mã đơn hàng</th>
                <th class="column10">Tên khách hàng</th>
                <th class="column15">Địa chỉ</th>
                <th class="column10">Số điện thoại</th>
                <th class="column15">Ngày đặt hàng</th>
                <th class="column10">Tổng tiền</th>
                <th class="column5">Xác nhận</th>
                <th class="column5">Thao Tác</th>
            </tr>
        <tbody class="tbody_QLOrder">
        <?php include("./DAL/DAL_QL_Order.php") ?>
        </tbody>
        </thead>
    </table>
</div>
            <div class="overplay_OrderDetail">
                <div class="overplay__behind_OrderDetail"></div>
                <div class="form_OrdersDetail">
                    <div class="title_OrderDetail">
                        THÔNG TIN ĐƠN HÀNG
                    </div>
                    <div class="form_OrderDetail_item">
                        <div class="btn_X">X</div>
                    </div>
                    <div class="content_OrderDetail"></div>
                </div>
            </div>
<script src="./js/QL_Order.js"></script>