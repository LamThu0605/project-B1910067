<?php
session_start();
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
  unset($_SESSION['dangky']);
}
?>
<header>
  <span>
    <div class="logo" href="home.php"><img src="./ig/logo.png" alt="" style="width:200px; margin-top:-40px" ></div>
    <!-- <div class="title">7larose</div> -->
    <?php
    include("./page/menu.php");
    ?>

    <form action="home.php?quanly=timkiem" method="POST" style="margin-left: auto;">
      <div class="input-group" style="float:right ; margin-top:20px ;">
        <input type="text" style="border:#ce2a37 solid 1px; color:#ce2a37;  border-top-left-radius: 25px 25px; border-bottom-left-radius: 25px 25px;    width: 150px;" class="form-control input-search" name="tukhoa" placeholder="Tìm kiếm..." aria-label="Search">
        <input type="submit" style="border:#ce2a37 solid 1px; color:white; height:38px; background:#ce2a37; border-top-right-radius: 25px 25px;border-bottom-right-radius: 25px 25px; margin-right: 20px; " value="Search" placeholder="Tìm kiếm" name="timkiem">
      </div>
    </form>

    <div class="form">
      <a href="home.php?quanly=giohang">
        <i style="font-size:24px" class="fa">&#xf07a;</i>
        <?php

        include('./page/dem.php');

        ?>
      </a>
    </div>

    <div class="dropdown" style="  margin-top: 30px; ">
      <a href="">
        <i style='font-size:24px; ' class='fas'>&#xf406;</i>
      </a>
      <?php
      if (isset($_SESSION['dangky'])) {
        echo '<span style="color:grey; font-weight:bold; margin-top: -21px; margin-left:40px; margin-right: 10px">' . $_SESSION['dangky'] . '</span>';
      }
      ?>
      <div class="noidung_dropdown_user">
        <?php
        if (isset($_SESSION['dangky'])) {
        ?>
          <a href="home.php?dangxuat=1" style="border: solid #ce2a37 1px ; ">Đăng Xuất</a>
          <a href="home.php?quanly=thaydoimatkhau" style="border: solid #ce2a37 1px ; "> Đổi Mật Khẩu</a>
          <a href="home.php?quanly=lichsudonhang" style="border: solid #ce2a37 1px ; width:175px ">Lịch Sử Đơn Hàng</a>
        <?php
        } else {
        ?>
          <a href="home.php?quanly=dangky" style="border: solid #ce2a37 1px ;">Đăng Ký</a>
          <a href="home.php?quanly=dangnhap" style="border: solid #ce2a37 1px ;">Đăng Nhập</a>

        <?php
        }
        ?>
      </div>

    </div>
  </span>
</header>