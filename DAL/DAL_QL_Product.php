<?php
include("DAL_Connect.php");

if(isset($_GET['sortField']) && isset($_GET['sortOrder'])){
  $sortField = $_GET['sortField'];
  $sortOrder = $_GET['sortOrder'];
  if ($sortField == 'Price') {
    $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct ORDER BY Price " . $sortOrder;
  } elseif ($sortField == 'Amount') {
    $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct ORDER BY Amount " . $sortOrder;
  }
}else {
  $sql = "SELECT * FROM product sp JOIN caterogyproduct loaisp on sp.IDCaterogyProduct = loaisp.IDCaterogyProduct";
}

$qry = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($qry)) { ?>
  <tr>
      <td>
          <?php echo $row['ProductID'] ?>
      </td>
      <td>
          <img src="./DAL/Image_SanPham/<?php echo $row['Image'] ?>" alt="" width='100px' height='100px'>
      </td>
      <td> <?php echo $row['NameCaterogyProduct'] ?></td>
      <td>
          <?php echo $row['NameProduct'] ?>
      </td>
      <td>
          <?php echo $row['ProductDetail'] ?>
      </td>
      <td>
          <?php echo $row['Amount'] ?>
      </td>
      <td>
          <?php echo $row['Price'] ?>
      </td>
      <td>
          <ul class="content_btn">
              <!-- Nút sửa sản phẩm -->
              <li class="btn_Sua" onclick="xemThongTinSPtheoID('<?php echo $row['ProductID']; ?>', '<?php echo $row['IDCaterogyProduct']; ?>', 'DAL/Image_SanPham/<?php echo $row['Image']; ?>', '<?php echo $row['NameProduct']; ?>', '<?php echo $row['ProductDetail']; ?>', '<?php echo $row['Amount']; ?>', '<?php echo $row['Price']; ?>', '<?php echo $row['Height']; ?>', '<?php echo $row['Weight']; ?>', '<?php echo $row['Material']; ?>')">
                  <img src="./img/btn_Sua.png">
              </li>
              <!-- Nút xóa sản phẩm -->
              <li class="btn_Xoa">
                  <a href="./DAL/DAL_Remove_Product.php?rm=<?php echo $row['ProductID']; ?>"
                      onclick="return confirm('Bạn có muốn xóa sản phẩm?')">
                      <img src="./img/btn_Xoa.png">
                  </a>
              </li>
          </ul>
      </td>
      <?php
      ?>
  </tr>
  <?php }
?>