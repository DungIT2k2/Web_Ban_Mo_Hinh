<link rel="stylesheet" href="./css/Admin.css">
<link rel="stylesheet" href="./css/thongke.css">

<h1>THỐNG KÊ TÌNH HÌNH KINH DOANH</h1>
<form class="form_thongke" onsubmit="submitForm(); return false;">
    <div>
        <label for="from-date">Từ ngày:</label>
        <input type="date" value="2023-01-01" id="from-date" name="from-date">
    </div>
    <div>
        <label for="to-date">Đến ngày:</label>
        <input type="date" value="2023-12-31" id="to-date" name="to-date">
    </div>
    <div>
        <label for="product-type">Loại sản phẩm:</label>
        <select id="product-type" name="product-type">
            <option value="all">Tất Cả</option>
            <?php include('get-products.php'); ?>
        </select>
    </div>
    <button type="submit" style="font-weight:600;" >THỐNG KÊ</button>
</form>
<div id="result"></div>

<script src="./js/thongke.js"></script>