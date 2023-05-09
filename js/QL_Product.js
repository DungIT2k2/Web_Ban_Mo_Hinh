const btn_XoaSP = document.querySelector(".btn_Xoa");
const btn_add_sp_MHNV = document.querySelector(".btn_add_sp_MHNV");
const btn_add_sp_MHS = document.querySelector(".btn_add_sp_MHS");

const overplay_addSP_MHNV = document.querySelector(".overplay_addSP_MHNV");
const overplay_addSP_MHS = document.querySelector(".overplay_addSP_MHS");

const overplay__behind_addSP_MHNV = document.querySelector(
  ".overplay__behind_addSP_MHNV"
);
const overplay__behind_addSP_MHS = document.querySelector(
  ".overplay__behind_addSP_MHS"
);

btn_add_sp_MHNV.onclick = function () {
  overplay_addSP_MHNV.style.display = "block";
};
btn_add_sp_MHS.onclick = function () {
  overplay_addSP_MHS.style.display = "block";
};

overplay__behind_addSP_MHNV.onclick = function () {
  overplay_addSP_MHNV.style.display = "none";
};

overplay__behind_addSP_MHS.onclick = function () {
  overplay_addSP_MHS.style.display = "none";
};

const image_input = document.querySelector("#image_input");
const image_input_MHS = document.querySelector("#image_input_MHS");
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
var uploaded_image_MHS = "";
image_input_MHS.addEventListener("change", function () {
  console.log(image_input.value);
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    uploaded_image_MHS = reader.result;
    document.querySelector(
      "#display_img_product_MHS"
    ).style.backgroundImage = `url(${uploaded_image_MHS})`;
    console.log(uploaded_image_MHS);
  });
  reader.readAsDataURL(this.files[0]);
});

function confirmDelete(productID) {
  var r = confirm("Bạn muốn xóa sản phẩm này khỏi giỏ hàng?");
  if (r == true) {
    window.location.href = "./DAL/DAL_Remove_Product.php?rm=" + productID;
    return true;
  } else {
     window.location.href = "admin.php?id=1";
    return false;
  }
}
const btn_confirm_add_sp_MHNV = document.querySelector(
  ".btn_confirm_add_sp_MHNV"
);
const btn_confirm_add_sp_MHS = document.querySelector(
  ".btn_confirm_add_sp_MHS"
);
btn_confirm_add_sp_MHNV.onclick = function () {
  let image_input_add = document.getElementById("image_input");
  if (image_input_add.value === "") {
    alert("Bạn chưa chọn hình");
  } else {
    checkNull_MHNV();
  }
};
btn_confirm_add_sp_MHS.onclick = function () {
  let image_input_add = document.getElementById("image_input_MHS");
  if (image_input_add.value === "") {
    alert("Bạn chưa chọn hình");
  } else {
    checkNull_MHS();
  }
};

function checkNull_MHNV() {
  const tenSP_addSP = document.querySelector("#tenSP_addSP");
  const tenNVSP_addSP = document.querySelector("#tenNVSP_addSP");
  const AnimeSP_addSP = document.querySelector("#AnimeSP_addSP");
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
    tenNVSP_addSP.value == "" ||
    AnimeSP_addSP.value == "" ||
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
    btn_confirm_add_sp_MHNV.type = "submit";
    btn_confirm_add_sp_MHNV.click();
  }
}
function checkNull_MHS() {
  const tenSP_addSP_MHS = document.querySelector("#tenSP_addSP_MHS");
  const gameSP_addSP_MHS = document.querySelector("#gameSP_addSP_MHS");
  const HeightSP_addSP_MHS = document.querySelector("#HeightSP_addSP_MHS");
  const WeightSP_addSP_MHS = document.querySelector("#WeightSP_addSP_MHS");
  const materialSP_addSP_MHS = document.querySelector("#materialSP_addSP_MHS");
  const txtArea_ChiTiet_addSP_MHS = document.querySelector(
    "#txtArea_ChiTiet_addSP_MHS"
  );
  const soluongSP_addSP_MHS = document.querySelector("#soluongSP_addSP_MHS");
  const giaSP_addSP_MHS = document.querySelector("#giaSP_addSP_MHS");
  if (
    tenSP_addSP_MHS.value == "" ||
    gameSP_addSP_MHS.value == "" ||
    HeightSP_addSP_MHS.value == "" ||
    WeightSP_addSP_MHS.value == "" ||
    materialSP_addSP_MHS.value == "" ||
    txtArea_ChiTiet_addSP_MHS.value == "" ||
    soluongSP_addSP_MHS.value == "" ||
    giaSP_addSP_MHS.value == ""
  ) {
    alert("Bạn chưa nhập đầy đủ thông tin sản phẩm !!!");
  } else if (soluongSP_addSP_MHS.value <= 0) {
    alert("Số lượng không được ít hơn 0 !!!");
  } else if (giaSP_addSP_MHS.value <= 0) {
    alert("Giá tiền không được nhỏ hơn 0 !!!");
  } else {
    btn_confirm_add_sp_MHS.type = "submit";
    btn_confirm_add_sp_MHS.click();
  }
}

document.getElementById("soluongSP_addSP_MHS").onkeydown = function (event) {
  // Kiểm tra xem ký tự nhập vào có phải là dấu "-" không
  if (event.key === "-") {
    // Nếu là dấu "-", ngăn người dùng nhập ký tự đó
    event.preventDefault();
  }
};
document.getElementById("giaSP_addSP_MHS").onkeydown = function (event) {
  // Kiểm tra xem ký tự nhập vào có phải là dấu "-" không
  if (event.key === "-") {
    // Nếu là dấu "-", ngăn người dùng nhập ký tự đó
    event.preventDefault();
  }
};
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
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("product-list").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET","./DAL/DAL_QL_Product.php?sortField=" + sortField + "&sortOrder=" + sortOrder, true);
  xmlhttp.send();
}

window.onload = function() {
  sortData('ProductID', 'asc');
};