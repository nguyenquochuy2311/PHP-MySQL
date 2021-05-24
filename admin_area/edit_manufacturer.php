<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_manufacturer'])) {
        $edit_manufacturer_id = $_GET['edit_manufacturer'];

        $edit_manufacturer_query = "select * from manufacturers where manufacturer_id='$edit_manufacturer_id'";
        $run_edit = mysqli_query($conn, $edit_manufacturer_query);
        $row_edit = mysqli_fetch_array($run_edit);

        $manufacturer_id = $row_edit['manufacturer_id'];
        $manufacturer_title = $row_edit['manufacturer_title'];
        $manufacturer_top = $row_edit['manufacturer_top'];
        $manufacturer_image = $row_edit['manufacturer_image'];
    }

    ?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Chỉnh sửa nhà sản xuất
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Chỉnh sửa nhà sản xuất
                </h3>
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Tên nhà sản xuất </label>
                        <div class="col-md-6">
                            <input name="manufacturer_title" type="text" class="form-control"
                                value="<?php echo $manufacturer_title; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Kiểm tra </label>
                        <div class="col-md-6">
                            <input type="radio" value="yes" name="manufacturer_top" <?php

                                                                                        if ($manufacturer_top == 'yes') {
                                                                                            echo "checked='checked'";
                                                                                        }

                                                                                        ?>>
                            <label>Yes</label>

                            <input type="radio" value="no" name="manufacturer_top" <?php

                                                                                        if ($manufacturer_top == 'no') {
                                                                                            echo "checked='checked'";
                                                                                        }

                                                                                        ?>>
                            <label>No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Hình ảnh nhà sản xuất </label>
                        <div class="col-md-6">
                            <input type="file" name="manufacturer_image" class="form-control">

                            <br />

                            <img src="other_images/<?php echo $manufacturer_image; ?>" class="img-responsive">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="update" value="Cập nhật nhà sản xuất" type="submit"
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

        $manufacturer_title = $_POST['manufacturer_title'];

        $manufacturer_top = $_POST['manufacturer_top'];

        $manufacturer_image = $_FILES['manufacturer_image']['name'];

        $temp_name = $_FILES['manufacturer_image']['tmp_name'];

        move_uploaded_file($temp_name, "other_images/$manufacturer_image");

        $update_manu = "update manufacturers set manufacturer_title='$manufacturer_title',manufacturer_top='$manufacturer_top',manufacturer_image='$manufacturer_image' where manufacturer_id='$manufacturer_id'";

        $run_update_manu = mysqli_query($conn, $update_manu);

        if ($run_update_manu) {

            echo "<script>alert('Nhà sản xuất được cập nhật thành công')</script>";

            echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
        }
    }

    ?>

<?php } ?>