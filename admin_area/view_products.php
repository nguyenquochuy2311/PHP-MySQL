<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">

                <i class="fa fa-dashboard"></i> Bảng điều khiển / Xem sản phẩm

            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> Xem sản phẩm
                </h3>

            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> STT </th>
                                <th> Tên </th>
                                <th> Hình ảnh </th>
                                <th> Giá </th>
                                <th> Đã bán </th>
                                <th> Từ khoá </th>
                                <th> Ngày </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                                $i = 0;

                                $get_pro = "select * from products";
                                $run_pro = mysqli_query($conn, $get_pro);

                                while ($row_pro = mysqli_fetch_array($run_pro)) {
                                    $pro_id = $row_pro['product_id'];
                                    $pro_title = $row_pro['product_title'];
                                    $pro_img = $row_pro['product_img'];
                                    $pro_price = $row_pro['product_price'];
                                    $pro_keywords = $row_pro['product_keywords'];
                                    $pro_date = $row_pro['date'];
                                    $i++;

                                ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $pro_title; ?></td>
                                <td>
                                    <img style="width:60px;height:60px;" src="product_images/<?php echo $pro_img; ?>"
                                        alt="Product Image">
                                </td>
                                <td><?php echo $pro_price; ?> <u>đ</u></td>
                                <td>
                                    <?php

                                            $get_sold = "select * from pending_orders where product_id='$pro_id'";
                                            $run_sold = mysqli_query($conn, $get_sold);

                                            $count = mysqli_num_rows($run_sold);
                                            echo $count;

                                            ?>
                                </td>
                                <td><?php echo $pro_keywords; ?></td>
                                <td><?php echo $pro_date; ?></td>
                                <td>
                                    <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                        <i class="fa fa-trash-o"></i> Xoá
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                        <i class="fa fa-pencil"></i> Sửa
                                    </a>
                                </td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php } ?>