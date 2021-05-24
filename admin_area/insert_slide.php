<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm Slide
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Thêm Slide
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Tên Slide </label>

                        <div class="col-md-6">
                            <input name="slide_name" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Slide URL </label>

                        <div class="col-md-6">
                            <input name="slide_url" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Hình ảnh Slide </label>
                        <div class="col-md-6">
                            <input type="file" name="slide_image" class="form-control">
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

        $slide_name = $_POST['slide_name'];

        $slide_url = $_POST['slide_url'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

        $view_slides = "select * from slider";
        $view_run_slide = mysqli_query($conn, $view_slides);
        $count = mysqli_num_rows($view_run_slide);

        if ($count < 3) {

            echo "<script>alert('Bạn cần thêm hình ảnh để đủ số lượng slide')</script>";
        } else {

            move_uploaded_file($temp_name, "slides_images/$slide_image");

            $insert_slide = "insert into slider (slider_name,slider_image,slide_url) values ('$slide_name','$slide_image','$slide_url')";

            $run_slide = mysqli_query($conn, $insert_slide);

            echo "<script>alert('Thêm mới Slide thành công')</script>";

            echo "<script>window.open('index.php?view_slides','_self')</script>";
        }
    }

    ?>

<?php } ?>