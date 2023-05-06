function load_data(page) {
    // Tạo đối tượng XMLHttpRequest
    var xhttp = new XMLHttpRequest();
    // Xác định phương thức và URL của yêu cầu
    xhttp.open("GET", "phantrang.php?page=" + page, true);
    // Xác định hàm xử lý khi nhận được kết quả trả về
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState === XMLHttpRequest.DONE && xhttp.status === 200) {
            // Cập nhật danh sách sản phẩm
            document.getElementById("student-list").innerHTML = xhttp.responseText;
        }
    };
    // Gửi yêu cầu đến server
    xhttp.send();
}