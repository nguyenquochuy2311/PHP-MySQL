<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_p_cat'])) {
        $edit_p_cat_id = $_GET['edit_p_cat'];

        $edit_p_cat_query = "select * from product_categories where p_cat_id='$edit_p_cat_id'";
        $run_edit = mysqli_query($conn, $edit_p_cat_query);
        $row_edit = mysqli_fetch_array($run_edit);

        $p_cat_id = $row_edit['p_cat_id'];
        $p_cat_title = $row_edit['p_cat_title'];
        $p_cat_desc = $row_edit['p_cat_desc'];
    }

    ?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Chỉnh sửa danh mục sản phẩm
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-pencil fa-fw"></i> Chỉnh sửa danh mục sản phẩm
                </h3>
            </div>

            <div class="panel-body">
                <form method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Tiêu đề danh mục sản phẩm </label>
                        <div class="col-md-6">
                            <input type="text" name="p_cat_title" class="form-control" required
                                value="<?php echo $p_cat_title; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Mô tả danh mục sản phẩm </label>
                        <div class="col-md-6">
                            <textarea cols="19" rows="20" type='text' name="p_cat_desc"
                                class="form-control"><?php echo $p_cat_desc; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="update" value="Chỉnh sửa danh mục sản phẩm" type="submit"
                                class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php } ?>