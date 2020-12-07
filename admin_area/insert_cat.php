<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm danh mục giới tính
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Thêm danh mục giới tính
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Chủ đề danh mục giới tính </label>

                        <div class="col-md-6">
                            <input name="cat_title" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Kiểm tra danh mục giới tính </label>
                        <div class="col-md-6">
                            <input type="radio" value="yes" name="cat_top">
                            <label>Yes</label>

                            <input type="radio" value="no" name="cat_top">
                            <label>No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Hình ảnh của danh mục giới tính </label>
                        <div class="col-md-6">
                            <input type="file" name="cat_img" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3"></label>
                        <div class="col-md-6">
                            <input type="submit" value="Thêm" name="submit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

    if (isset($_POST['submit'])) {

        $cat_title = $_POST['cat_title'];
        $cat_top = $_POST['cat_top'];
        $cat_image = $_FILES['cat_img']['name'];

        $temp_name = $_FILES['cat_img']['tmp_name'];

        move_uploaded_file($temp_name, "other_images/$cat_image");

        $insert_cat = "insert into categories (cat_title,cat_top,cat_image) values ('$cat_title','$cat_top','$cat_image')";

        $run_cat = mysqli_query($conn, $insert_cat);

        if ($run_cat) {

            echo "<script>alert('Danh mục sản phẩm mới được thêm thành công')</script>";

            echo "<script>window.open('index.php?view_cats','_self')</script>";
        }
    }

    ?>

<?php } ?>