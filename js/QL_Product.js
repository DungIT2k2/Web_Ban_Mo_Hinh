const btn_XoaSP = document.querySelector(".btn_Xoa");
const btn_add_sp = document.querySelector(".btn_add_sp");
const overplay_addSP = document.querySelector(".overplay_addSP");
const overplay__behind_addSP = document.querySelector(
  ".overplay__behind_addSP"
);

btn_add_sp.onclick = function () {
  check_PhanQuyen("QLSP", "Them", function (htmls) {
    var check = htmls;
    if (check == 0) {
      alert("Bạn không có quyền thêm!");
    }
    else {
      overplay_addSP.style.display = "block";
    }
  })
};

overplay__behind_addSP.onclick = function () {
  overplay_addSP.style.display = "none";
};

const image_input = document.querySelector("#image_input");
var uploaded_image = "";

image_input.addEventListener("change", function () {
  //   console.log(image_input.value);
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    uploaded_image = reader.result;
    document.querySelector(
      "#display_img_product"
    ).style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});

//Button sua san pham
const overplay_ChinhSuaSP = document.querySelector(".overplay_ChinhSuaSP");
const form__ChinhSuaSP = document.querySelector(".form__ChinhSuaSP");
const overplay__behind_ChinhSuaSP = document.querySelector(
  ".overplay__behind_ChinhSuaSP"
);
const btn_confirm_ChinhSua = document.querySelector(".btn_confirm_ChinhSua");
const maSP_ChinhSua = document.querySelector("#maSP_ChinhSua");
const loaiSP_ChinhSua = document.querySelector("#loaiSP_ChinhSua");
const image_ChinhSua = document.querySelector("#display_img_product_SSP");
const tenSP_ChinhSua = document.querySelector("#tenSP_ChinhSua");
const soLuong_ChinhSua = document.querySelector("#soLuongSP_ChinhSua");
const giaBan_ChinhSua = document.querySelector("#giabanraSP_ChinhSua");
const chieuCao_ChinhSua = document.querySelector("#HeightSP_ChinhSua");
const canNang_ChinhSua = document.querySelector("#WeightSP_ChinhSua");
const chatLieu_ChinhSua = document.querySelector("#MaterialSP_ChinhSua");
const ctSP_ChinhSua = document.querySelector("#txtArea_ChiTiet_ChinhSua");
overplay__behind_ChinhSuaSP.onclick = function () {
  overplay_ChinhSuaSP.style.display = "none";
};

btn_confirm_ChinhSua.onclick = function () {
  checkNull_ChinhSua();
};

function checkNull_ChinhSua() {
  const soLuong_ChinhSua = document.querySelector("#soLuongSP_ChinhSua");
  const giaBan_ChinhSua = document.querySelector("#giabanraSP_ChinhSua");
  const chieuCao_ChinhSua = document.querySelector("#HeightSP_ChinhSua");
  const canNang_ChinhSua = document.querySelector("#WeightSP_ChinhSua");
  const chatLieu_ChinhSua = document.querySelector("#MaterialSP_ChinhSua");
  const ctSP_ChinhSua = document.querySelector("#txtArea_ChiTiet_ChinhSua");
  if (
    tenSP_ChinhSua.value == "" ||
    chieuCao_ChinhSua.value == "" ||
    canNang_ChinhSua.value == "" ||
    chatLieu_ChinhSua.value == "" ||
    ctSP_ChinhSua.value == "" ||
    soLuong_ChinhSua.value == "" ||
    giaBan_ChinhSua.value == ""
  ) {
    alert("Bạn chưa nhập đầy đủ thông tin sản phẩm !!!");
  }
  else if (soLuong_ChinhSua.value == 0) {
    alert("Số lượng không được ít hơn 0 !!!");
  } else if (giaBan_ChinhSua.value == 0) {
    alert("Giá tiền không được nhỏ hơn 0 !!!");
  } else {
    btn_confirm_ChinhSua.type = "submit";
    btn_confirm_ChinhSua.click();
  }
}

document.getElementById("soLuongSP_ChinhSua").onkeydown = function (event) {
  // Kiểm tra xem ký tự nhập vào có phải là dấu "-" không
  if (event.key === "-") {
    // Nếu là dấu "-", ngăn người dùng nhập ký tự đó
    event.preventDefault();
  }
};
document.getElementById("giabanraSP_ChinhSua").onkeydown = function (event) {
  // Kiểm tra xem ký tự nhập vào có phải là dấu "-" không
  if (event.key === "-") {
    // Nếu là dấu "-", ngăn người dùng nhập ký tự đó
    event.preventDefault();
  }
};

function xemThongTinSPtheoID(id, loai, image, ten, ctsp, soLuong, gia, chieucao, cannang, chatlieu) {
  check_PhanQuyen("QLSP", "Sua", function (htmls) {
    var check = htmls;
    if (check == 0) {
      alert("Bạn không có quyền sửa!");
    }
    else {
      overplay_ChinhSuaSP.style.display = "block";
      maSP_ChinhSua.value = id;
      loaiSP_ChinhSua.value = loai;
      image_ChinhSua.style.backgroundImage = `url(${image})`;
      ctSP_ChinhSua.value = ctsp;
      tenSP_ChinhSua.value = ten;
      soLuong_ChinhSua.value = soLuong;
      giaBan_ChinhSua.value = gia;
      chieuCao_ChinhSua.value = chieucao;
      canNang_ChinhSua.value = cannang;
      chatLieu_ChinhSua.value = chatlieu;
      // temp_file_img.value = image;
    }
  });
}

const image_input_SSP = document.querySelector("#image_input_SSP");
var uploaded_image_SSP = "";

image_input_SSP.addEventListener("change", function () {
  // console.log(image_input.value);
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    console.warn(2);
    uploaded_image_SSP = reader.result;
    document.querySelector("#display_img_product_SSP").style.backgroundImage = `url(${uploaded_image_SSP})`;
  });
  reader.readAsDataURL(this.files[0]);
})

function confirmDelete(productID) {
  check_PhanQuyen("QLSP", "Xoa", function (htmls) {
    var check = htmls;
    if (check == 0) {
      alert("Bạn không có quyền xóa!");
    }
    else {
      console.log(productID);
      var r = confirm("Bạn muốn xóa sản phẩm này khỏi giỏ hàng?");
      if (r == true) {
        window.location.href = "./DAL/DAL_Remove_Product.php?rm=" + productID;
        return true;
      } else {
        window.location.href = "admin.php?id=1";
        return false;
      }
    }
  });
}
//Button add san pham
const btn_confirm_add_sp = document.querySelector(
  ".btn_confirm_add_sp"
);
btn_confirm_add_sp.onclick = function () {
  let image_input_add = document.getElementById("image_input");
  if (image_input_add.value === "") {
    alert("Bạn chưa chọn hình");
  } else {
    checkNull_MHNV();
  }
};

function checkNull_MHNV() {
  const tenSP_addSP = document.querySelector("#tenSP_addSP");
  const HeightSP_addSP = document.querySelector("#HeightSP_addSP");
  const WeightSP_addSP = document.querySelector("#WeightSP_addSP");
  const MaterialSP_addSP = document.querySelector("#MaterialSP_addSP");
  const txtArea_ChiTiet_addSP = document.querySelector(
    "#txtArea_ChiTiet_addSP"
  );
  const soluongSP_addSP = document.querySelector("#soluongSP_addSP");
  const giaSP_addSP = document.querySelector("#giaSP_addSP");
  if (
    tenSP_addSP.value == "" ||
    HeightSP_addSP.value == "" ||
    WeightSP_addSP.value == "" ||
    MaterialSP_addSP.value == "" ||
    txtArea_ChiTiet_addSP.value == "" ||
    soluongSP_addSP.value == "" ||
    giaSP_addSP.value == ""
  ) {
    alert("Bạn chưa nhập đầy đủ thông tin sản phẩm !!!");
  } else if (soluongSP_addSP.value <= 0) {
    alert("Số lượng không được ít hơn 0 !!!");
  } else if (giaSP_addSP.value <= 0) {
    alert("Giá tiền không được nhỏ hơn 0 !!!");
  } else {
    btn_confirm_add_sp.type = "submit";
    btn_confirm_add_sp.click();
  }
}
document.getElementById("soluongSP_addSP").onkeydown = function (event) {
  // Kiểm tra xem ký tự nhập vào có phải là dấu "-" không
  if (event.key === "-") {
    // Nếu là dấu "-", ngăn người dùng nhập ký tự đó
    event.preventDefault();
  }
};
document.getElementById("giaSP_addSP").onkeydown = function (event) {
  // Kiểm tra xem ký tự nhập vào có phải là dấu "-" không
  if (event.key === "-") {
    // Nếu là dấu "-", ngăn người dùng nhập ký tự đó
    event.preventDefault();
  }
};

function sortData(sortField, sortOrder) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("product-list").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "./DAL/DAL_QL_Product.php?sortField=" + sortField + "&sortOrder=" + sortOrder, true);
  xmlhttp.send();
}

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