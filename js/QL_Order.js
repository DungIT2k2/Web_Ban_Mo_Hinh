const cthoadon_overlay = document.querySelector(".overplay_OrderDetail");
const cthoadon_close = document.querySelector(".btn_X");
const from_date = document.getElementById("from-date");
const to_date = document.getElementById("to-date");
const btn_search_DH = document.querySelector(".btn_search_order");
const tbody_QL_Order = document.querySelector(".tbody_QLOrder");
const content_OrderDetail = document.querySelector(".content_OrderDetail")

const cthoadon_overlay_behind = document.querySelector(".overplay__behind_OrderDetail");
const content_orderdetail = document.querySelector(".content_OrderDetail");

function XemChiTiet(iddonhang) {
  taoCTDH(iddonhang);
  cthoadon_overlay.classList.toggle("show");
}
cthoadon_close.addEventListener("click", function () {
  cthoadon_overlay.classList.toggle("show");
});
cthoadon_overlay_behind.addEventListener("click", function () {
  cthoadon_overlay.classList.toggle("show");
});

btn_search_DH.addEventListener("click", function () {
  const tbody_CTDH = document.getElementById("tbody_CTDH");
  var tu = from_date.value;
  var den = to_date.value;
  console.log(tu);
    console.log(den);
  if (tu > den) {
    alert("Ngày kết thúc phải lớn hơn ngày bắt đầu");
  } else if (isNaN(tu) == false || isNaN(den) == false) {
    alert("Dữ liệu không được để trống");
  } else {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_QL_Order.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Xử lý kết quả trả về từ PHP
        var response = xhr.responseText;
        console.log(response);
        if (response == 0) {
          alert("Không có đơn hàng nào được tìm thấy!");
        } else {
          tbody_QL_Order.innerHTML = response;
        }
      }
    };
    xhr.send("from_date=" + tu + "&to_date=" + den);
  }
});

function taoCTDH(iddonhang) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_DetailOrder.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      content_orderdetail.innerHTML = response;
      getCTDH(iddonhang);
    }
  };
  xhr.send("iddh=" + iddonhang + "&phuongthuc=tao");
}

function getCTDH(iddonhang) {
  const tbody_CTDH = document.getElementById("tbody_CTDH");
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_DetailOrder.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      tbody_CTDH.innerHTML = response;
    }
  };
  xhr.send("iddh=" + iddonhang + "&phuongthuc=get");
}
function checkedUser(iddonhang, location) {
  var checkbox = document.getElementsByName("confirm_user");
  check_PhanQuyen("QLDH", "Sua", function (htmls) {
    var check = htmls;
    if (check == 0) {
      alert("Bạn không có quyền sửa!");
      checkbox[location].checked = false;
    }
    else {
      for (var i = 0; i < checkbox.length; i++) {
        if (checkbox[i].checked) {
          checkbox[i].disabled = true;
        }
      }
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "./DAL/DAL_DetailOrder.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          // Xử lý kết quả trả về từ PHP
          var response = xhr.responseText;
          console.warn(response);
          if (response == 1) {
            alert("Xác nhận đơn hàng thành công!");
          }
        }
      };
      xhr.send("iddh=" + iddonhang + "&phuongthuc=checkeduser");
    }
  });
}
function Confirm_DH() {
  check_PhanQuyen("QLDH", "Sua", function (htmls) {
    var check = htmls;
    if (check == 0) {
      alert("Bạn không có quyền sửa!");
      checkbox[location].checked = false;
    }
    else {
      const iddonhang = document.getElementById("MaDH");
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "./DAL/DAL_DetailOrder.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          // Xử lý kết quả trả về từ PHP
          var response = xhr.responseText;
          if (response == 1) {
            alert("Xác nhận đơn hàng thành công!");
            taoCTDH(iddonhang.textContent);
            getCTDH(iddonhang.textContent);
            reload_QLDH();
          }
        }
      };
      xhr.send("iddh=" + iddonhang.textContent + "&phuongthuc=confirmuser");
    }
  });
}
function reload_QLDH() {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_QL_Order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      console.log(response);
      tbody_QL_Order.innerHTML = response;
    }
  };
  xhr.send("from_date=" + from_date.value + "&to_date=" + to_date.value);
}

// load lại trang
window.onload = function () {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_QL_Order.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      tbody_QL_Order.innerHTML = response;
    }
  };

  var data =
    "from_date=" +
    encodeURIComponent(from_date.value) +
    "&to_date=" +
    encodeURIComponent(to_date.value);
  xhr.send(data);
};
function check_PhanQuyen(kv, check, callback) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./DAL/DAL_Check_Quyen.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      console.log(response);
      callback(response);
    }
  };
  xhr.send("kv=" + kv + "&check=" + check);
}