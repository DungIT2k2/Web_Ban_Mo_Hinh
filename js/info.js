const btn_info = document.getElementById("info");
const infoOverlay = document.getElementById("if_overlay");
const infoContainer = document.getElementById("if_container");
const btnInfoClose = document.getElementById("btn_if_close");
const product_container = document.querySelector(".product__container");
const container_row = document.querySelector(".container__row");
const banner_img = document.querySelector(".container__imgLarge-wrap");
const if_sdt = document.getElementById("info_sdt");
const if_diachi = document.getElementById("info_diachi");
const btn_save = document.getElementById("btn_save_info");
btn_info.addEventListener("click", () => {
  infoOverlay.classList.toggle("show");
  infoContainer.classList.toggle("show");
  product_container.classList.add("disable");
  container_row.classList.add("disable");
  banner_img.classList.add("disable");
});
infoOverlay.addEventListener("click", () => {
  btn_info.click();
  product_container.classList.remove("disable");
  container_row.classList.remove("disable");
  banner_img.classList.remove("disable");
});
btnInfoClose.addEventListener("click", () => {
  btn_info.click();
  product_container.classList.remove("disable");
  container_row.classList.remove("disable");
  banner_img.classList.remove("disable");
});

btn_save.addEventListener("click", function () {
  if (if_sdt.value.length < 10) {
    alert("Số diện thoại không được ít hơn 10 số  !");
  } else if (if_sdt.value.length > 10) {
    alert("Số điện thoại không được nhiều hơn 10 !");
  } else {
    UpdateInfo();
  }
});
function UpdateInfo() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_Update_Info_User.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      console.warn(response);
      if (response == 1) {
        alert("Cập nhật thông tin thành công!");
      }
    }
  };
  xhr.send("diachi=" + if_diachi.value + "&sdt=" + if_sdt.value);
}

// Kiểm tra xem ký tự nhập vào có phải là dấu "-" hoặc "+" không
// Nếu là dấu "-" hoặc "+", ngăn người dùng nhập ký tự đó
if_sdt.onkeydown = function (event) {
  if (event.key === "-") {
    event.preventDefault();
  } else if (event.key === "+") {
    event.preventDefault();
  }
};
