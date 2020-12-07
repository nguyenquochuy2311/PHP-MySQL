<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_cat'])) {

        $edit_cat_id = $_GET['edit_cat'];

        $edit_cat_query = "select * from categories where cat_id='$edit_cat_id'";
        $run_edit = mysqli_query($conn, $edit_cat_query);
        $row_edit = mysqli_fetch_array($run_edit);

        $cat_id = $row_edit['cat_id'];
        $cat_title = $row_edit['cat_title'];
        $cat_top = $row_edit['cat_top'];
        $cat_image = $row_edit['cat_image'];
    }

    ?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Chỉnh sửa danh mục giới tính
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-pencil fa-fw"></i> Chỉnh sửa danh mục giới tính
                </h3>
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Tiêu đề danh mục giới tính </label>
                        <div class="col-md-6">
                            <input value=" <?php echo $cat_title; ?> " name="cat_title" type="text"
                                class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Kiểm tra danh mục giới tính </label>
                        <div class="col-md-6">
                            <input type="radio" value="yes" name="cat_top" <?php

                                                                                if ($cat_top == 'yes') {
                                                                                    echo "checked='checked'";
                                                                                }

                                                                                ?>>
                            <label>Yes</label>

                            <input type="radio" value="no" name="cat_top" <?php

                                                                                if ($cat_top == 'no') {
                                                                                    echo "checked='checked'";
                                                                                }

                                                                                ?>>
                            <label>No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Hình ảnh danh mục giới tính </label>
                        <div class="col-md-6">
                            <input type="file" name="cat_image" class="form-control">

                            <br />

                            <img src="other_images/<?php echo $cat_image; ?>" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="update" value="Cập nhật danh mục giới tính" type="submit"
                                class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

    if (isset($_POST['update'])) {

        $cat_title = $_POST['cat_title'];
        $cat_top = $_POST['cat_top'];
        $cat_image = $_FILES['cat_image']['name'];

        $temp_name = $_FILES['cat_image']['tmp_name'];

        move_uploaded_file($temp_name, "other_images/$cat_image");

        $update_cat = "update categories set cat_title='$cat_title',cat_top='$cat_top',cat_image='$cat_image' where cat_id='$cat_id'";
        $run_cat = mysqli_query($conn, $update_cat);

        if ($run_cat) {

            echo "<script>alert('Danh mục giới tính được cập nhật thành công')</script>";

            echo "<script>window.open('index.php?view_cats','_self')</script>";
        }
    }

    ?>

<?php } ?>