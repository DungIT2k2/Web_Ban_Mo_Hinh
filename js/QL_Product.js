const btn_XoaSP = document.querySelector(".btn_Xoa");
const btn_add_sp_MHNV = document.querySelector(".btn_add_sp_MHNV");
const btn_add_sp_MHS = document.querySelector(".btn_add_sp_MHS");

const overplay_addSP_MHNV = document.querySelector(".overplay_addSP_MHNV");
const overplay_addSP_MHS = document.querySelector(".overplay_addSP_MHS");

const overplay__behind_addSP_MHNV = document.querySelector(".overplay__behind_addSP_MHNV");
const overplay__behind_addSP_MHS = document.querySelector(".overplay__behind_addSP_MHS");

btn_add_sp_MHNV.onclick = function(){
    overplay_addSP_MHNV.style.display = "block";
}
btn_add_sp_MHS.onclick = function(){
    overplay_addSP_MHS.style.display = "block";
}


overplay__behind_addSP_MHNV.onclick = function(){
    overplay_addSP_MHNV.style.display = "none";
}

overplay__behind_addSP_MHS.onclick = function(){
    overplay_addSP_MHS.style.display = "none";
}

const image_input = document.querySelector("#image_input");
var uploaded_image = "";

image_input.addEventListener("change", function(){
    console.log(image_input.value);
    const reader = new FileReader();
    reader.addEventListener("load", () =>{
        uploaded_image = reader.result;
        document.querySelector("#display_img_product").style.backgroundImage = `url(${uploaded_image})`;
        
    });
    reader.readAsDataURL(this.files[0]);
})

 

