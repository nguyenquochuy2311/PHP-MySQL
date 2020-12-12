<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<?php

    if (isset($_GET['edit_product'])) {
        $edit_id = $_GET['edit_product'];

        $get_p = "select * from products where product_id='$edit_id'";
        $run_edit = mysqli_query($conn, $get_p);
        $row_edit = mysqli_fetch_array($run_edit);

        $pro_id = $row_edit['product_id'];
        $pro_cat = $row_edit['p_cat_id'];
        $cat = $row_edit['cat_id'];
        $manu_id = $row_edit['manufacturer_id'];
        $pro_title = $row_edit['product_title'];
        $pro_img = $row_edit['product_img'];
        $pro_price = $row_edit['product_price'];
        $pro_keywords = $row_edit['product_keywords'];
        $pro_desc = $row_edit['product_desc'];
    }

    $get_p_cat = "select * from product_categories where p_cat_id='$pro_cat'";
    $run_p_cat = mysqli_query($conn, $get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];

    $get_cat = "select * from categories where cat_id='$cat'";
    $run_cat = mysqli_query($conn, $get_cat);
    $row_cat = mysqli_fetch_array($run_cat);

    $cat_title = $row_cat['cat_title'];

    $get_manu = "select * from manufacturers where manufacturer_id='$manu_id'";
    $run_manu = mysqli_query($conn, $get_manu);
    $row_manu = mysqli_fetch_array($run_manu);

    $manu_title = $row_manu['manufacturer_title'];

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
                    <i class="fa fa-dashboard"></i> Bảng điều khiển / Chỉnh sửa sản phẩm
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Chỉnh sửa sản phẩm
                    </h3>
                </div>

                <div class="panel-body">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Tiêu đề sản phẩm </label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control" required
                                    value="<?php echo $pro_title; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Danh mục sản phẩm </label>
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control">
                                    <option value="<?php echo $pro_cat; ?>"> <?php echo $p_cat_title; ?> </option>

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
                            <label class="col-md-3 control-label"> Danh mục giới tính</label>
                            <div class="col-md-6">
                                <select name="cat" class="form-control">
                                    <option value="<?php echo $cat; ?>"> <?php echo $cat_title; ?> </option>

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
                            <label class="col-md-3 control-label"> Nhà sản xuất</label>
                            <div class="col-md-6">
                                <select name="manu" class="form-control">
                                    <option value="<?php echo $manu_id; ?>"> <?php echo $manu_title; ?> </option>

                                    <?php
                                        $get_manu = "select * from manufacturers";
                                        $run_manu = mysqli_query($conn, $get_manu);

                                        while ($row_manu = mysqli_fetch_array($run_manu)) {
                                            $manu_id = $row_manu['manufacturer_id'];
                                            $manu_title = $row_manu['manufacturer_title'];

                                            echo "
                                        <option value='$manu_id'>$manu_title</option>
                                        ";
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Hình ảnh của sản phẩm </label>

                            <div class="col-md-6">
                                <input type="file" name="product_img" class="f  orm-control" required>
                                <img style="width:100px;height:100px;" src="product_images/<?php echo $pro_img; ?>"
                                    alt="<?php echo $pro_title; ?>">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> Giá sản phẩm </label>
                            <div class="col-md-6">
                                <input type="text" name="product_price" class="form-control" required
                                    value="<?php echo $pro_price; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Từ khoá về sản phẩm </label>
                            <div class="col-md-6">
                                <input type="text" name="product_keywords" class="form-control" required
                                    value="<?php echo $pro_keywords; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"> Mô tả sản phẩm </label>
                            <div class="col-md-6">
                                <textarea name="product_desc" class="form-control" cols="19" rows="6">
                                <?php echo $pro_desc; ?>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6">
                                <input name="update" value="Cập nhật sản phẩm" type="submit"
                                    class="btn btn-primary form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: 'textarea'
    });
    </script>
</body>

</html>

<?php
    if (isset($_POST['update'])) {

        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $manu_id = $_POST['manu'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        $product_img = $_FILES['product_img']['name'];

        $temp_name = $_FILES['product_img']['tmp_name'];

        move_uploaded_file($temp_name, "product_images/$product_img");

        $update_product = "update products set p_cat_id='$product_cat',cat_id='$cat',manufacturer_id='$manu_id',date=NOW(),product_title='$product_title',product_img='$product_img'," .
            "product_price='$product_price',product_keywords='$product_keywords',product_desc='$product_desc' where product_id='$pro_id'";

        $run_product = mysqli_query($conn, $update_product);

        if ($run_product) {
            echo "<script>alert('Sản phẩm được cập nhật thành công')</script>";
            echo "<script>window.open('index.php?view_products','_self')</script>";
        } else {
            echo "<script>alert('Lỗi')</script>";
        }
    }
    ?>

<?php } ?>