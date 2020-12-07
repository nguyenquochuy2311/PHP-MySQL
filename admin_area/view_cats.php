<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Xem danh mục giới tính
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags fa-fw"></i> Xem danh mục giới tính
                </h3>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> STT </th>
                                <th> Chủ đề danh mục giới tính </th>
                                <th> Hình ảnh danh mục giới tính </th>
                                <th> Kiểm tra danh mục giới tính </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                                $i = 0;

                                $get_cats = "select * from categories";
                                $run_cats = mysqli_query($conn, $get_cats);

                                while ($row_cats = mysqli_fetch_array($run_cats)) {

                                    $cat_id = $row_cats['cat_id'];
                                    $cat_title = $row_cats['cat_title'];
                                    $cat_top = $row_cats['cat_top'];
                                    $cat_image = $row_cats['cat_image'];
                                    $i++;

                                ?>

                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $cat_title; ?> </td>
                                <td> <img src="other_images/<?php echo $cat_image; ?>" width="60" height="60"> </td>
                                <td> <?php echo $cat_top; ?> </td>

                                <td>
                                    <a href="index.php?delete_cat=<?php echo $cat_id; ?>">
                                        <i class="fa fa-trash"></i> Xoá
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_cat=<?php echo $cat_id; ?>">
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