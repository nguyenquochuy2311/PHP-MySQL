<?php
$active = 'Giỏ hàng';
include("includes/header.php");

?>
<!--Bat dau content cua san pham-->
<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <!--Thu tu trang-->
                <li>
                    <a href="index.php">Trang chủ</a>
                </li>
                <li>
                    Giỏ hàng
                </li>
            </ul>
        </div>

        <div id="cart" class="col-md-9">
            <div class="box">
                <form action="giohang.php" method="post" enctype="multipart/form-data">
                    <h1>Giỏ hàng của bạn</h1>

                    <?php

                    $ip_add = getRealIpUser();
                    $select_cart = "select * from cart where ip_add='$ip_add'";
                    $run_cart = mysqli_query($conn, $select_cart);
                    $count = mysqli_num_rows($run_cart);

                    ?>

                    <p class="text-muted"><?php echo $count; ?> sản phẩm ở hiện tại</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Kích cỡ</th>
                                    <th colspan="1">Xoá</th>
                                    <th colspan="2">Giá tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $total = 0;
                                while ($row_cart = mysqli_fetch_array($run_cart)) {
                                    $pro_id = $row_cart['p_id'];
                                    $pro_size = $row_cart['size'];
                                    $pro_qty = $row_cart['qty'];

                                    $get_products = "select * from products where product_id='$pro_id'";
                                    $run_products = mysqli_query($conn, $get_products);

                                    while ($row_products = mysqli_fetch_array($run_products)) {
                                        $product_title = $row_products['product_title'];
                                        $product_img = $row_products['product_img'];
                                        $only_price = $row_products['product_price'];
                                        $sub_total = $row_products['product_price'] * $pro_qty;

                                        $total += $sub_total;

                                ?>

                                <tr>
                                    <td>
                                        <img class="img-responsive"
                                            src="admin_area/product_images/<?php echo $product_img; ?>"
                                            alt="Product 1a">
                                    </td>
                                    <td>
                                        <a href="chitiet.php?pro_id=<?php echo $pro_id; ?>">
                                            <?php echo $product_title; ?> </a>
                                    </td>
                                    <td>
                                        <?php echo $pro_qty; ?>
                                    </td>
                                    <td>
                                        <?php echo $only_price; ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_size; ?>
                                    </td>
                                    <td>
                                        <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                    </td>
                                    <td>
                                        <?php echo $sub_total; ?>
                                    </td>
                                </tr>

                                <?php
                                    }
                                }

                                ?>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th colspan="5">Tổng tiền</th>
                                    <th colspan="2"><?php echo $total; ?> <u>đ</u></th>
                                </tr>
                            </tfoot>

                        </table>
                    </div>

                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="cuahang.php" class="btn btn-default">
                                <i class="fa fa-fa-chevron-circle-left"></i>Quay lại cửa hàng
                            </a>
                        </div>

                        <div class="pull-right">
                            <button type="submit" name="update" value="Cập nhật giỏ hàng" class="btn btn-default">
                                <i class="fa fa-refresh"></i>Cập nhật giỏ hàng
                            </button>

                            <a href="checkout.php" class="btn btn-primary">
                                Tiến hành thanh toán <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <?php

            function update_cart()
            {
                global $conn;

                if (isset($_POST['update'])) {
                    foreach ($_POST['remove'] as $remove_id) {

                        $delete_product = "delete from cart where p_id='$remove_id'";
                        $run_delete = mysqli_query($conn, $delete_product);

                        if ($run_delete) {
                            echo "<script>window.open('giohang.php','_self')</script>";
                        }
                    }
                }
            }

            echo @$up_cart = update_cart();

            ?>

            <div id="row same-heigh-row">
                <div class="col-md-3 col-sm-6">
                    <div class="box same-height headline">
                        <h3 class="text-center">Sản phẩm liên quan</h3>
                    </div>
                </div>

                <?php

                $get_products = "select * from products order by rand() LIMIT 0,3";
                $run_products = mysqli_query($conn, $get_products);

                while ($row_products = mysqli_fetch_array($run_products)) {
                    $pro_id = $row_products['product_id'];
                    $pro_title = $row_products['product_title'];
                    $pro_price = $row_products['product_price'];
                    $pro_img = $row_products['product_img'];

                    echo "
                        <div class='col-md-3 col-sm-6 center-responsive'>
                            <div class='product same-height'>
                                <a href='chitiet.php?pro_id=$pro_id'>
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img' alt='Product $pro_id'>
                                </a>

                                <div class='text'>
                                    <h3>
                                        <a href='chitiet.php?pro_id=$pro_id'> $pro_title </a>
                                    </h3>
                                    <p class='price'><strong>$pro_price đ</strong></p>
                                </div>
                            </div>
                        </div>
                    ";
                }

                ?>

            </div>
        </div>

        <div class="col-md-3">
            <div id="order-summary" class="box">
                <div class="box-header">
                    <h3>Tổng tiền đơn hàng</h3>
                </div>

                <p class="text-muted">
                    Đã tính bao gồm thuế và phí vận chuyển
                </p>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td> Tổng đơn hàng </td>
                                <th> <?php echo $total; ?> </th>
                            </tr>
                            <tr>
                                <td> Phí vận chuyển và ship </td>
                                <td> 1.000 </td>
                            </tr>
                            <tr>
                                <td> Thuế </td>
                                <th> 2.000 </th>
                            </tr>
                            <tr class="total">
                                <td> Tổng </td>
                                <th> <?php echo $total; ?> </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!--Ket thuc content cua san pham-->

<?php

include("includes/footer.php");
?>


<script src="js/jquery-331.js"></script>
<script src="js/boostrap-337.js"></script>
</body>

</html>