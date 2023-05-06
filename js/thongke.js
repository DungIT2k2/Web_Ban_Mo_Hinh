// Lấy các input field
var fromDateInput = document.getElementById("from_date");
var toDateInput = document.getElementById("to_date");
var salesReportDiv = document.getElementById("sales_report");

// Thêm sự kiện input cho các input field
fromDateInput.addEventListener("input", updateSalesReport);
toDateInput.addEventListener("input", updateSalesReport);
// Hàm xử lý sự kiện input của các input field
function updateSalesReport() {
    var fromDate = fromDateInput.value;
    var toDate = toDateInput.value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_thongke.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Hiển thị kết quả trả về lên trang web
            salesReportDiv.innerHTML = xhr.responseText;
        }
    };

    // Gửi request tới server
    xhr.send("from_date=" + fromDate + "&to_date=" + toDate);
}
