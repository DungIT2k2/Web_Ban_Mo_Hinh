const email = document.getElementById('dangki_username')
const ho = document.getElementById('dangki_ho')
const ten = document.getElementById('dangki_ten')
const pass = document.getElementById('dangki_password')
const cf_pass = document.getElementById('dangki_cf_password')
const btn_dangki = document.getElementById('btn_dangki')
const form_dangki = document.getElementById('form_dangki')

form_dangki.addEventListener("submit", check);
email.addEventListener("change", function(){
    checkemail(email.value);
});

function checkemail(email_current){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./DAL/DAL_Check_Email.php", true);    
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Xử lý kết quả trả về từ PHP
            var response = xhr.responseText;
            if (response == 1){
                alert("Email đã tồn tại!")
                email.value = "";
                email.focus();
            } 
        }
    };
    xhr.send("email_current=" + email_current);

}

function check(){
    if (email.value.includes("@gmail.com") == true || email.value.includes("@email.com") == true){

    }
    else {
        alert("Không đúng định dạng email!")
        email.value = "";
        email.focus();
        return false;
    }
    if (ho.value ==  ""){
        alert("Vui lòng nhập họ!")
        ho.focus();
        return false;
    }
    else if (ten.value == ""){
        alert("Vui lòng nhập tên!")
        ten.focus();
        return false;
    }
    if (isNaN(ho.value) == false){
        alert("Họ phải là chữ!");
        ho.value = "";
        ho.focus();  
        return false;
    }
    else if (isNaN(ten.value) == false){
        alert("Tên phải là chữ!");
        ten.value = "";
        ten.focus();  
        return false;
    }
    if (pass.value != cf_pass.value){
        alert("Nhập lại mật khẩu sai!")
        cf_pass.value = ""
        cf_pass.focus()
        return false;
    }
    form_dangki.submit();
}