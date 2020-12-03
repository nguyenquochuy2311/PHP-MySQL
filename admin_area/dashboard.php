<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Bảng điều khiển </h1>

        <ol class="breadcrumb">
            <li class="active">

                <i class="fa fa-dashboard"></i> Bảng điều khiển

            </li>
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">

                        <i class="fa fa-tasks fa-5x"></i>

                    </div>

                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_products; ?> </div>

                        <div> Sản phẩm </div>

                    </div>

                </div>
            </div>

            <a href="index.php?view_products">
                <div class="panel-footer">

                    <span class="pull-left">
                        Xem chi tiết
                    </span>

                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>

                    <div class="clearfix"></div>

                </div>
            </a>

        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">

            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                        <div> Khách hàng </div>
                    </div>
                </div>
            </div>

            <a href="index.php?view_customers">
                <div class="panel-footer">
                    <span class="pull-left">
                        Xem chi tiết
                    </span>

                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>

                    <div class="clearfix"></div>

                </div>
            </a>

        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_p_cats; ?> </div>
                        <div> Danh mục sản phẩm </div>
                    </div>

                </div>
            </div>

            <a href="index.php?view_p_cats">
                <div class="panel-footer">
                    <span class="pull-left">
                        Xem chi tiết
                    </span>

                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>

                    <div class="clearfix"></div>

                </div>
            </a>

        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">

            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>

                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_pending_orders; ?> </div>
                        <div> Đơn đặt hàng </div>
                    </div>

                </div>
            </div>

            <a href="index.php?view_orders">
                <div class="panel-footer">
                    <span class="pull-left">
                        Xem chi tiết
                    </span>

                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>

                    <div class="clearfix"></div>

                </div>
            </a>

        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Đơn hàng mới
                </h3>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">

                        <thead>

                            <th> Mã đơn đặt hàng </th>
                            <th> Email </th>
                            <th> Mã hoá đơn </th>
                            <th> Mã sản phẩm </th>
                            <th> Số lượng </th>
                            <th> Kích cỡ </th>
                            <th> Tình trạng </th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php

                                $i = 0;

                                $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,4";
                                $run_order = mysqli_query($conn, $get_order);

                                while ($row_order = mysqli_fetch_array($run_order)) {
                                    $order_id = $row_order['order_id'];
                                    $c_id = $row_order['customer_id'];
                                    $invoice_no = $row_order['invoice_no'];
                                    $product_id = $row_order['product_id'];
                                    $qty = $row_order['qty'];
                                    $size = $row_order['size'];
                                    $order_status = $row_order['order_status'];
                                    $i++;
                                ?>

                            <tr>
                                <td> <?php echo $order_id; ?> </td>
                                <td>

                                    <?php
                                            $get_customer = "select * from customers where customer_id='$c_id'";
                                            $run_customer = mysqli_query($conn, $get_customer);
                                            $row_customer = mysqli_fetch_array($run_customer);

                                            $customer_email = $row_customer['customer_email'];
                                            echo $customer_email;
                                            ?>

                                </td>
                                <td> <?php echo $invoice_no; ?> </td>
                                <td> <?php echo $product_id; ?> </td>
                                <td> <?php echo $qty; ?> </td>
                                <td> <?php echo $size; ?> </td>
                                <td> <?php echo $order_status; ?> </td>

                            </tr>
                            <?php } ?>

                        </tbody>

                    </table>
                </div>

                <div class="text-right">

                    <a href="index.php?view_orders">
                        Xem tất cả các đơn đặt hàng <i class="fa fa-arrow-circle-right"></i>
                    </a>

                </div>

            </div>

        </div>
    </div>

    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body">
                <div class="mb-md thumb-info">
                    <img style="width:360px;height:450px;" src="admin_images/<?php echo $admin_image; ?>"
                        alt="admin-thumb-info" class="rounded img-responsive">

                    <div class="thumb-info-title">
                        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
                        <span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
                    </div>

                </div>

                <hr class="dotted short">

                <div class="mb-md">
                    <div class="widget-content-expanded">
                        <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?> <br />
                        <i class="fa fa-flag"></i> <span> Quốc tịch: </span> <?php echo $admin_country; ?> <br />
                        <i class="fa fa-envelope"></i> <span> Liên hệ: </span> <?php echo $admin_contact; ?> <br />
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<?php } ?>