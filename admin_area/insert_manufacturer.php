<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm nhà sản xuất
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Thêm nhà sản xuất
                </h3>
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Tên nhà sản xuất </label>
                        <div class="col-md-6">
                            <input type="text" name="manu_title" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Kiểm tra nhà sản xuất </label>
                        <div class="col-md-6">
                            <input type="radio" value="yes" name="manu_top">
                            <label>Yes</label>

                            <input type="radio" value="no" name="manu_top">
                            <label>No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Hình ảnh của nhà sản xuất </label>
                        <div class="col-md-6">
                            <input type="file" name="manu_img" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="submit" value="Thêm nhà sản xuất" type="submit"
                                class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

    if (isset($_POST['submit'])) {

        $manu_title = $_POST['manu_title'];
        $manu_top = $_POST['manu_top'];
        $manu_image = $_FILES['manu_img']['name'];

        $temp_name = $_FILES['manu_img']['tmp_name'];

        move_uploaded_file($temp_name, "other_images/$manu_image");

        $insert_manu = "insert into manufacturers (manufacturer_title,manufacturer_top,manufacturer_image) values ('$manu_title','$manu_top','$manu_image')";

        $run_manu = mysqli_query($conn, $insert_manu);

        if ($run_manu) {

            echo "<script>alert('Nhà sản xuất mới được thêm thành công')</script>";

            echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
        }
    }

    ?>

<?php } ?>