function checkedUser(iduser){
    const checkbox = document.getElementById(iduser);
    console.log(checkbox);
    check = checkbox.checked ? 1 : 0;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_QL_User_Update.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý kết quả trả về từ PHP
      var response = xhr.responseText;
      console.log(response);
      if(response == 1){
        alert("Cập nhật trạng thái thành công!");
      }
    }
    }
  xhr.send("id="+iduser+"&trangthai="+check);
}
