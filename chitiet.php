<?php
$active = 'Giỏ hàng';
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
                <li>
                    <a href="cuahang.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                </li>
                <li>
                    <?php
                    echo $pro_title;
                    ?>
                </li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php
            include("includes/sidebar.php");
            ?>
        </div>

        <div class="col-md-9">
            <div id="productMain" class="row">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <div id="myCarousel" class="carousel slide" data-target="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img src="admin_area/product_images/<?php echo $pro_img; ?>"
                                            alt="Product 1-a" class="img-responsive"></center>
                                </div>
                                <div class="item">
                                    <center><img src="admin_area/product_images/<?php echo $pro_img; ?>"
                                            alt="Product 1-b" class="img-responsive"></center>
                                </div>
                                <div class="item">
                                    <center><img src="admin_area/product_images/<?php echo $pro_img; ?>"
                                            alt="Product 1-c" class="img-responsive"></center>
                                </div>
                            </div>

                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Truoc</span>
                            </a>

                            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Sau</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="box">
                        <h1 class="text-center"><?php echo $pro_title; ?></h1>

                        <form action="chitiet.php?add_cart=<?php echo $product_id; ?>" class="form-horizontal"
                            method="POST">
                            <div class="form-group">
                                <label for="" class="col-md-5 control-label">Số lượng</label>

                                <div class="col-md-7">
                                    <select name="product_qty" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-5 control-label">Kích cỡ</label>
                                <div class="col-md-7">
                                    <select name="product_size" class="form-control" required
                                        oninput="setCustomValidity('')"
                                        oninvalid="setCustomValidity('Phải chọn kích cỡ sản phẩm')">

                                        <option disabled selected>Lựa chọn kích cỡ</option>
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>

                                    </select>
                                </div>
                            </div>

                            <?php add_cart(); ?>

                            <p class="price"><strong><?php echo $pro_price; ?> đ</strong></p>

                            <p class="text-center buttons">
                                <button class="btn btn-primary i fa fa-shopping-cart"> Thêm giỏ hàng</button>
                            </p>
                        </form>
                    </div>

                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $pro_img; ?>" alt="Product 1-a"
                                    class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $pro_img; ?>" alt="Product 1-b"
                                    class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                <img src="admin_area/product_images/<?php echo $pro_img; ?>" alt="Product 1-c"
                                    class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box" id="details">
                <h4>Chi tiết sản phẩm</h4>
                <p>
                    <?php echo $pro_desc; ?>
                </p>
                <h4>Size</h4>
                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>
                </ul>
            </div>

            <div id="row same-heigh-row">
                <div class="col-md-3 col-sm-6">
                    <div class="box same-height headline">
                        <h3 class="text-center">Sản phẩm liên quan</h3>
                    </div>
                </div>

                <?php

                $get_products = "select * from products order by rand() desc limit 0,3";
                $run_products = mysqli_query($conn, $get_products);

                while ($row_products = mysqli_fetch_array($run_products)) {
                    $pro_id = $row_products['product_id'];
                    $pro_title = $row_products['product_title'];
                    $pro_price = $row_products['product_price'];
                    $pro_img = $row_products['product_img'];

                    echo "
                        <div class='col-md-3 col-sm-6 center-responsive'>
                            <div class='product same-height'>
                                <a href='chitiet.php?pro_id='$pro_id'>
                                    <img class='img-responsive' src='admin_area/product_images/$pro_img'>
                                </a>

                                <div class='text'>
                                    <h3>
                                        <a href='chitiet.php?pro_id=$pro_id'> $pro_title </a>
                                    </h3>
                                    <p class='price'><strong>$pro_price đ</strong></p>
                                </div>
                            </div>
                        </div>
                    ";
                }
                ?>

            </div>
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