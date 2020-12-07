<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm danh mục sản phẩm
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Thêm danh mục sản phẩm
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Chủ đề danh mục sản phẩm </label>

                        <div class="col-md-6">
                            <input name="p_cat_title" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Kiểm tra danh mục sản phẩm </label>
                        <div class="col-md-6">
                            <input type="radio" value="yes" name="p_cat_top">
                            <label>Yes</label>

                            <input type="radio" value="no" name="p_cat_top">
                            <label>No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Hình ảnh của danh mục sản phẩm </label>
                        <div class="col-md-6">
                            <input type="file" name="p_cat_img" class="form-control" required>
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

        $p_cat_title = $_POST['p_cat_title'];
        $p_cat_top = $_POST['p_cat_top'];
        $p_cat_image = $_FILES['p_cat_img']['name'];

        $temp_name = $_FILES['p_cat_img']['tmp_name'];

        $insert_p_cat = "insert into product_categories (p_cat_title,p_cat_top,p_cat_image) values ('$p_cat_title','$p_cat_top','$p_cat_image')";

        $run_p_cat = mysqli_query($conn, $insert_p_cat);


        if ($run_p_cat) {

            echo "<script>alert('Thêm mới danh mục sản phẩm thành công')</script>";

            echo "<script>window.open('index.php?view_p_cats','_self')</script>";
        }
    }

    ?>

<?php } ?>