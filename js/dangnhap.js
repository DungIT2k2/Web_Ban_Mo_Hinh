const btn_dangnhap = document.getElementById('btn_login')
const username = document.getElementById('login_username')
const password = document.getElementById('login_password')
const form_dangnhap = document.getElementById('form_dangnhap');

function checkLogin() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_dangnhap.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      console.log(response);
      if (response == 2) {
        alert("Đăng nhập thành công!")
        window.location.href = "http://localhost/web_2/web_2/index.php";
      }
      if (response == 1) {
        alert("Đăng nhập thành công!")
        window.location.href = "http://localhost/web_2/web_2/admin.php";
      }
      if (response == 3){
        alert("Sai tài khoản hoặc mật khẩu!");
        username.value = "";
        password.value = "";
      }
      if (response == 4){
        alert("Tài khoản của bạn đã bị khóa!");
        username.value = "";
        password.value = "";
      }
    }
  };
  var data = "username=" + username.value + "&password=" + password.value;
  xhr.send(data);
}

form_dangnhap.addEventListener("submit", checkLogin);