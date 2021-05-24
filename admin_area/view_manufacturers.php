<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>


<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Xem thông tin nhà sản xuất
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> Xem thông tin nhà sản xuất
                </h3>

            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> STT </th>
                                <th> Tên thương hiệu </th>
                                <th> Hình ảnh </th>
                                <th> Kiểm tra </th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                                $i = 0;

                                $get_manu = "select * from manufacturers";

                                $run_manu = mysqli_query($conn, $get_manu);

                                while ($row_manu = mysqli_fetch_array($run_manu)) {

                                    $manu_id = $row_manu['manufacturer_id'];

                                    $manu_title = $row_manu['manufacturer_title'];

                                    $manu_img = $row_manu['manufacturer_image'];

                                    $manu_top = $row_manu['manufacturer_top'];

                                    $i++;

                                ?>

                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $manu_title; ?> </td>
                                <td> <img src="other_images/<?php echo $manu_img; ?>" width="60" height="60"></td>
                                <td> <?php echo $manu_top; ?> </td>
                                <td>
                                    <a href="index.php?delete_manufacturer=<?php echo $manu_id; ?>">
                                        <i class="fa fa-trash-o"></i> Xoá
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_manufacturer=<?php echo $manu_id; ?>">
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