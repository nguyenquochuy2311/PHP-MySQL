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
        $cat_desc = $row_edit['cat_desc'];
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
                <form method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Tiêu đề danh mục giới tính </label>
                        <div class="col-md-6">
                            <input value=" <?php echo $cat_title; ?> " name="cat_title" type="text"
                                class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Mô tả danh mục giới tính </label>
                        <div class="col-md-6">
                            <textarea cols="19" rows="20" type='text' name="cat_desc"
                                class="form-control"><?php echo $cat_desc; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="update" value="Chỉnh sửa danh mục giới tính" type="submit"
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

        $cat_desc = $_POST['cat_desc'];
        $update_cat = "update categories set cat_title='$cat_title',cat_desc='$cat_desc' where cat_id='$cat_id'";
        $run_cat = mysqli_query($conn, $update_cat);

        if ($run_cat) {

            echo "<script>alert('Danh mục giới tính được cập nhật thành công')</script>";

            echo "<script>window.open('index.php?view_cats','_self')</script>";
        }
    }

    ?>

<?php } ?>