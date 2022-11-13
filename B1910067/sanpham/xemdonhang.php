<?php
$code = $_GET['code'];
$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='" . $code . "' ORDER BY tbl_cart_details.id_cart_details ASC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<style>
    .add {
        height: 45px;
        background: #696969;
        border: 1px solid #696969;
        color: white !important;
        font-family: Muli;
        width: 210px;
        font-weight: bold;

    }

    .add:hover {
        background: white;
        color: #ce2a37 !important;
        border:#ce2a37 1px solid;
    }

    input[type="submit"] {
        color: white;
        font-weight: bold;
    }

    input[type="submit"]:hover {
        color: #ce2a37;
        font-weight: bold;
    }
</style>
<div class="container mr-5" >
    <div style=" width: 1000px; color:#696969 !important; margin-bottom: 50px">
        <p style="font-size: 40px; text-align:center; margin-top:30px; margin-bottom:30px; ">Đơn Hàng <b style="color:#ce2a37;"><?php echo $code ?></b></p>
        <div class="add" style=" padding-top: 10px; float:left; margin: 10px 0px">
            <a href="home.php?quanly=lichsudonhang">
                <input style="border:none ; background:repeat" type="submit" name="themdanhmuc" value="<< Xem Đơn Hàng Khác">
            </a>
        </div>
        <table style="width:100%" border="1" style="border-collapse:collapse;">
            <tr style="height: 60px; background: #ce2a37; color: white ; font-size: 16px">
                <th style="text-align:center; width: 40px">ID</th>
                <th style="text-align:center; width: 120px">Mã Đơn Hàng</th>
                <th style="text-align:center; width: 130px">Tên Sản Phẩm</th>
                <th style="text-align:center; width: 120px">Số Lượng</th>
                <th style="text-align:center; width: 120px">Đơn Giá</th>
                <th style="text-align:center; width: 120px">Thành Tiền</th>
            </tr>
            <?php
            $i = 0;
            $tongtien = 0;
            $dt = 0;
            while ($row = mysqli_fetch_array($query_lietke_dh)) {
                $i++;
                $thanhtien = $row['giasp'] * $row['soluongmua'];
                $tongtien += $thanhtien;

            ?>
                <tr>
                    <td style=" padding:10px; text-align:center;"> <?php echo $i ?></td>
                    <td style="text-align:center;"><?php echo $row['code_cart'] ?></td>
                    <td style="text-align:center;"><?php echo $row['tensanpham'] ?></td>
                    <td style="text-align:center;"><?php echo $row['soluongmua'] ?></td>
                    <td style="text-align:center;"><?php echo number_format($row['giasp']) ?>$</td>
                    <td style="text-align:center;"><?php echo number_format($thanhtien) ?>$</td>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="6">
                    <p style="float: right; padding: 0 30px; padding-top:15px; font-weight:bold; font-size: 20px; color:#ce2a37">Tổng Tiền: <?php echo number_format($tongtien) ?>$</p>
                </td>
            </tr>
        </table>
    </div>
</div>