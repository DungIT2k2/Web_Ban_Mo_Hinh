// Thực hiện thống kê
function submitForm() {
  var from_date = document.getElementById("from-date").value;
  var to_date = document.getElementById("to-date").value;
  var product_type = document.getElementById("product-type").value;
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_thongke.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      document.getElementById("result").innerHTML = response;
    }
  };

  var data = "from_date=" + encodeURIComponent(from_date) + "&to_date=" + encodeURIComponent(to_date) + "&product_type=" + encodeURIComponent(product_type);
  xhr.send(data);
}
