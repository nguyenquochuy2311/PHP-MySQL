<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_box'])) {

        $edit_box_id = $_GET['edit_box'];

        $edit_box_query = "select * from boxes_section where box_id='$edit_box_id'";

        $run_edit_box = mysqli_query($conn, $edit_box_query);

        $row_edit_box = mysqli_fetch_array($run_edit_box);

        $box_id = $row_edit_box['box_id'];

        $box_title = $row_edit_box['box_title'];

        $box_desc = $row_edit_box['box_desc'];
    }

    ?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Chỉnh sửa Box
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-pencil fa-fw"></i> Chỉnh sửa Box
                </h3>
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Tiêu đề Box </label>
                        <div class="col-md-6">
                            <input value=" <?php echo $box_title; ?> " name="box_title" type="text"
                                class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Mô tả Box </label>
                        <div class="col-md-6">
                            <textarea type='text' name="box_desc"
                                class="form-control"><?php echo $box_desc; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="update_box" value="Cập nhật Box" type="submit"
                                class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

    if (isset($_POST['update_box'])) {

        $box_title = $_POST['box_title'];

        $box_desc = $_POST['box_desc'];

        $update_box = "update boxes_section set box_title='$box_title',box_desc='$box_desc' where box_id='$box_id'";

        $run_box = mysqli_query($conn, $update_box);

        if ($run_box) {

            echo "<script>alert('Box được cập nhật thành công')</script>";

            echo "<script>window.open('index.php?view_boxes','_self')</script>";
        }
    }

    ?>

<?php } ?>