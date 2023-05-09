<link rel="stylesheet" href="./css/Admin.css">
<link rel="stylesheet" href="./css/thongke.css">

<h1>Thống kê kinh doanh sản phẩm</h1>
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
            <option value="all">all</option>
            <?php include('get-products.php'); ?>
        </select>
    </div>
    <button type="submit">Thống kê</button>
</form>
<div id="result"></div>

<script src="./js/thongke.js"></script>