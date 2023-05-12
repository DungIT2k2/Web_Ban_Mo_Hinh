// Thực hiện thống kê
var result_date = document.getElementById("result");
function submitForm() {
  var from_date = document.getElementById("from-date").value;
  var to_date = document.getElementById("to-date").value;
  var product_type = document.getElementById("product-type").value;
  
  var xhr = new XMLHttpRequest();

  console.log(from_date, to_date);

  xhr.open("POST", "./DAL/DAL_thongke.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var dateStart = new Date(from_date);
      var dateEnd = new Date(to_date);

      var from_date_check = Date.parse(from_date);
      var to_date_check = Date.parse(to_date);

      if (isNaN(from_date_check)== true || isNaN(to_date_check) == true) {
        alert("Dữ liệu không được để trống");
      }else if(dateStart > dateEnd){
        alert("Ngày Kết Thúc phải lớn hơn ngày Bắt Đầu!");
      } else {
        var response = xhr.responseText;
        result_date.innerHTML = response;
      }
    }
  };

  var data =
    "from_date=" +
    encodeURIComponent(from_date) +
    "&to_date=" +
    encodeURIComponent(to_date) +
    "&product_type=" +
    encodeURIComponent(product_type);
  xhr.send(data);
}

window.onload = function () {
  var from_date = document.getElementById("from-date").value;
  var to_date = document.getElementById("to-date").value;
  var product_type = document.getElementById("product-type").value;
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_thongke.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var dateStart = new Date(from_date);
      var dateEnd = new Date(to_date);

      var from_date_check = Date.parse(from_date);
      var to_date_check = Date.parse(to_date);

      if (!isNaN(from_date_check) && !isNaN(to_date_check) && dateStart < dateEnd) {
        var response = xhr.responseText;
        document.getElementById("result").innerHTML = response;
      } else {
        alert("Please enter valid date values.");
      }
    }
  };

  var data =
    "from_date=" +
    encodeURIComponent(from_date) +
    "&to_date=" +
    encodeURIComponent(to_date) +
    "&product_type=" +
    encodeURIComponent(product_type);
  xhr.send(data);
};
