<div class="Content_Orders header_content">
    <div class="header_DoanhThu">
        Danh Sách Đơn Hàng
    </div>

    <!--  Tìm kiếm đơn hàng nhập từ ngày này tới ngày khác -->
    <form class="form_order" onsubmit="submitForm(); return false;">
        <div>
            <span class="">Lọc: </span>
        </div>

        <div>
            <label for="from-date">Từ:</label>
            <input type="date" value="2023-01-01" id="from-date" name="from-date">
        </div>

        <div>
            <label for="to-date">Đến:</label>
            <input type="date" value="2023-12-31" id="to-date" name="to-date">
        </div>
        <button class ="btn_search_order" type="submit">Tìm</button>
    </form>
    <div id="result_order"></div>


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
            <?php 
                // include("./DAL/DAL_QL_Order.php"); 
            ?>
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
<link rel="stylesheet" href="./css/Admin.css">