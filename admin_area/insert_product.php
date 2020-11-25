<?php
include("includes/database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-337.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <title>Insert Product</title>
</head>

<body>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm sản phẩm
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Thêm sản phẩm
                    </h3>
                </div>

                <div class="panel-body">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Tiêu đề sản phẩm </label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Danh mục sản phẩm </label>
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control">
                                    <option> Chọn danh mục sản phẩm</option>

                                    <?php
                                    $get_p_cats = "select * from product_categories";
                                    $run_p_cats = mysqli_query($conn, $get_p_cats);

                                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
                                        $p_cat_id = $row_p_cats['p_cat_id'];
                                        $p_cat_title = $row_p_cats['p_cat_title'];

                                        echo "
                                        <option value='$p_cat_id'>$p_cat_title</option>
                                        ";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Danh mục </label>
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control">
                                    <option> Chọn danh mục </option>

                                    <?php
                                    $get_cat = "select * from categories";
                                    $run_cat = mysqli_query($conn, $get_cat);

                                    while ($row_cat = mysqli_fetch_array($run_cat)) {
                                        $cat_id = $row_cat['cat_id'];
                                        $cat_title = $row_cat['cat_title'];

                                        echo "
                                        <option value='$cat_id'>$cat_title</option>
                                        ";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Hình ảnh 1 của sản phẩm </label>
                            <div class="col-md-6">
                                <input type="file" name="product_img" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Hình ảnh 2 của sản phẩm </label>
                            <div class="col-md-6">
                                <input type="file" name="product_img" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Hình ảnh 3 của sản phẩm </label>
                            <div class="col-md-6">
                                <input type="file" name="product_img" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Giá sản phẩm </label>
                            <div class="col-md-6">
                                <input type="text" name="product_price" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Từ khoá về sản phẩm </label>
                            <div class="col-md-6">
                                <input type="text" name="product_keywords" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Mô tả sản phẩm </label>
                            <div class="col-md-6">
                                <textarea name="product_desc" class="form-control" cols="19" rows="6"></textarea>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="js/jquery-331.js"></script>
    <script src="js/boostrap-337.js"></script>
</body>

</html>