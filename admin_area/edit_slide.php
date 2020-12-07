<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_slide'])) {

        $edit_slide_id = $_GET['edit_slide'];

        $edit_slide = "select * from slider where slider_id='$edit_slide_id'";

        $run_edit_slide = mysqli_query($conn, $edit_slide);

        $row_edit_slide = mysqli_fetch_array($run_edit_slide);

        $slide_id = $row_edit_slide['slider_id'];

        $slide_name = $row_edit_slide['slider_name'];

        $slide_image = $row_edit_slide['slider_image'];

        $slide_url = $row_edit_slide['slide_url'];
    }

    ?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Chỉnh sửa Slide
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Chỉnh sửa Slide
                </h3>
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Tiêu đề Slide </label>
                        <div class="col-md-6">
                            <input name="slide_name" type="text" class="form-control"
                                value="<?php echo $slide_name; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Slide URL </label>
                        <div class="col-md-6">
                            <input name="slide_url" type="text" class="form-control" value="<?php echo $slide_url; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Hình ảnh Slide </label>
                        <div class="col-md-6">
                            <input type="file" name="slide_image" class="form-control">

                            <br />

                            <img src="slides_images/<?php echo $slide_image; ?>" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="update" value="Cập nhật Slide" type="submit"
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

        $slide_name = $_POST['slide_name'];

        $slide_url = $_POST['slide_url'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

        move_uploaded_file($temp_name, "slides_images/$slide_image");

        $update_slide = "update slider set slider_name='$slide_name',slider_image='$slide_image',slide_url='$slide_url' where slider_id='$slide_id'";

        $run_update_slide = mysqli_query($conn, $update_slide);

        if ($run_update_slide) {

            echo "<script>alert('Slide được cập nhật thành công')</script>";

            echo "<script>window.open('index.php?view_slides','_self')</script>";
        }
    }

    ?>

<?php } ?>