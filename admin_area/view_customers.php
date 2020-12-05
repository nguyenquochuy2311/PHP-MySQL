<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Xem thông tin khách hàng
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> Xem thông tin khách hàng
                </h3>

            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> STT </th>
                                <th> Họ và tên </th>
                                <th> Hình ảnh </th>
                                <th> Email </th>
                                <th> Quốc tịch </th>
                                <th> Tỉnh </th>
                                <th> Địa chỉ </th>
                                <th> Liên hệ </th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                                $i = 0;

                                $get_c = "select * from customers";

                                $run_c = mysqli_query($conn, $get_c);

                                while ($row_c = mysqli_fetch_array($run_c)) {

                                    $c_id = $row_c['customer_id'];

                                    $c_name = $row_c['customer_name'];

                                    $c_img = $row_c['customer_image'];

                                    $c_email = $row_c['customer_email'];

                                    $c_country = $row_c['customer_country'];

                                    $c_city = $row_c['customer_city'];

                                    $c_address = $row_c['customer_address'];

                                    $c_contact = $row_c['customer_contact'];

                                    $i++;

                                ?>

                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $c_name; ?> </td>
                                <td> <img src="../customer/customer_images/<?php echo $c_img; ?>" width="60"
                                        height="60"></td>
                                <td> <?php echo $c_email; ?> </td>
                                <td> <?php echo $c_country; ?></td>
                                <td> <?php echo $c_city; ?> </td>
                                <td> <?php echo $c_address ?> </td>
                                <td> <?php echo $c_contact ?> </td>
                                <td>

                                    <a href="index.php?delete_customer=<?php echo $c_id; ?>">

                                        <i class="fa fa-trash-o"></i> Xoá

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