<?php
$active = 'Cửa hàng';
include("includes/header.php");

?>

<!--Bat dau content cua san pham-->
<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <!--Thu tu trang-->
                <li>
                    <a href="index.php">Trang chủ</a>
                </li>
                <li>
                    Cửa hàng
                </li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php
            include("includes/sidebar.php");
            ?>
        </div>

        <div class="col-md-9">
            <?php
            if (!isset($_GET['p_cat'])) {
                if (!isset($_GET['cat'])) {
                    echo "
                    <h3 style='text-align:center;'>Sản phẩm</h3>
                    ";
                }
            }
            ?>

            <div class="row">
                <?php
                if (!isset($_GET['p_cat'])) {
                    if (!isset($_GET['cat'])) {
                        $per_page = 6;

                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }

                        $start_from = ($page - 1) * $per_page;

                        $get_products = "select * from products order by 1 desc limit $start_from,$per_page";

                        $run_products = mysqli_query($conn, $get_products);

                        while ($row_products = mysqli_fetch_array($run_products)) {

                            $pro_id = $row_products['product_id'];
                            $pro_title = $row_products['product_title'];
                            $pro_price = $row_products['product_price'];
                            $pro_img = $row_products['product_img'];

                            echo "
                                <div class='col-md-4 col-md-6 center-responsive'>
                                    <div class='product'>
                                        <a href='chitiet.php?pro_id=$pro_id'>
                                            <img class='img-responsive' src='admin_area/product_images/$pro_img'>

                                        </a>

                                        <div class='text'>
                                            <h3>
                                                <a href='chitiet.php?pro_id=$pro_id'> $pro_title </a>
                                            </h3>

                                            <p class='price'>
                                                $pro_price đ
                                            </p>

                                            <p class='button'>
                                                <a class='btn btn-default' href='chitiet.php?pro_id=$pro_id'>
                                                    Chi tiết
                                                </a>

                                                <a class='btn btn-primary' href='chitiet.php?pro_id=$pro_id'>
                                                    <i class='fa fa-shopping-cart'></i> Giỏ hàng
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                ";
                        }
                    }
                }
                ?>
            </div>
            <center>
                <ul class="pagination">
                    <?php
                    if (!isset($_GET['p_cat'])) {
                        if (!isset($_GET['cat'])) {
                        }
                    }
                    ?>
                </ul>
            </center>

        </div>
    </div>

</div>
<!--Ket thuc content cua san pham-->
<?php

include("includes/footer.php");
?>


<script src="js/jquery-331.js"></script>
<script src="js/boostrap-337.js"></script>
</body>

</html>