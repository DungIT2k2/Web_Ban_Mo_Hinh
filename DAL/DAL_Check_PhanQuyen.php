<?php
function CheckPhanQuyen($kv,$chucnang){
    include("./DAL_Connect.php");
    $sql = 'Select Them, Xoa, Sua, Xem from phanquyen Where IDQuyen="'.$_SESSION['login']['role'].'" AND KhuVucQuanLi="'.$kv.'"';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            if($chucnang == "Them"){
                if($row["Them"]  == 1){
                    echo "true";
                }
                else {
                    echo "false";
                }
            }
            if($chucnang == "Xoa"){
                if($row["Xoa"]  == 1){
                    echo "true";
                }
                else {
                    echo "false";
                }
            }
            if($chucnang == "Sua"){
                if($row["Sua"]  == 1){
                    echo "true";
                }
                else {
                    echo "false";
                }
            }
            if($chucnang == "Xem"){
                if($row["Xem"]  == 1){
                    echo "true";
                }
                else {
                    echo "false";
                }
            }

        }
    }
}
?>