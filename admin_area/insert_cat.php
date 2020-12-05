<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
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
                <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Chủ đề danh mục giới tính </label>

                        <div class="col-md-6">
                            <input name="cat_title" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Mô tả danh mục giới tính </label>
                        <div class="col-md-6">
                            <textarea type='text' name="cat_desc" id="" cols="30" rows="10"
                                class="form-control"></textarea>
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
        $cat_desc = $_POST['cat_desc'];

        $insert_cat = "insert into categories (cat_title,cat_desc) values ('$cat_title','$cat_desc')";

        $run_cat = mysqli_query($conn, $insert_cat);

        if ($run_cat) {

            echo "<script>alert('Danh mục sản phẩm mới được thêm thành công')</script>";

            echo "<script>window.open('index.php?view_cats','_self')</script>";
        }
    }

    ?>

<?php } ?>