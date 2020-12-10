<?php

session_start();

$active = 'Giỏ hàng';

include("includes/database.php");
include("functions/functions.php");

?>

<?php
if (isset($_GET['pro_id'])) {
    $product_id = $_GET['pro_id'];

    $get_product = "select * from products where product_id='$product_id'";
    $run_product = mysqli_query($conn, $get_product);
    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];
    $pro_title = $row_product['product_title'];
    $pro_price = $row_product['product_price'];
    $pro_desc = $row_product['product_desc'];
    $pro_img = $row_product['product_img'];

    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    $run_p_cat = mysqli_query($conn, $get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap-337.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <script src="js/myjquery.js"></script>
    <title>My Website</title>
</head>

<body>
    <!-- Bat dau Top-->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="checkout.php" class="btn btn-success btn-sm">

                    <?php

                    if (!isset($_SESSION['customer_email'])) {
                        echo "Chào mừng: Quý khách";
                    } else {
                        echo "Chào mừng: " . $_SESSION['customer_email'] . "";
                    }

                    ?>

                </a>
                <a href="checkout.php"><?php items(); ?> sản phẩm trong giỏ hàng | Tổng tiền:
                    <?php total_price(); ?></a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="khach_dangky.php">Đăng ký</a>
                    </li>
                    <li>
                        <a href="checkout.php">Tài khoản của tôi</a>
                    </li>
                    <li>
                        <a href="giohang.php">Giỏ hàng</a>
                    </li>
                    <li>
                        <a href="checkout.php">

                            <?php

                            if (!isset($_SESSION['customer_email'])) {
                                echo "<a href='checkout.php'> Đăng nhập </a>";
                            } else {
                                echo "<a href='logout.php'> Đăng xuất </a>";
                            }

                            ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Ket thuc Top-->

    <!--Bat dau Header-->
    <div id="navbar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand home">
                    <img style="width:125px;height:49px;" src="images/logo.jpg" alt="Lixibox Logo" class=hidden-xs>
                    <img style="width:83px;height:33px;" src="images/logo.jpg" alt="Lixibox Logo Mobile"
                        class="visible-xs">
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle N

                        avigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                        <li class="<?php if ($active == 'Trang chủ') echo "active"; ?>">
                            <a href="index.php">Trang chủ</a>
                        </li>

                        <li class="<?php if ($active == 'Cửa hàng') echo "active"; ?>">
                            <a href="cuahang.php">Cửa hàng</a>
                        </li>

                        <li class="<?php if ($active == 'Tài khoản của tôi') echo "active"; ?>">

                            <?php

                            if (!isset($_SESSION['customer_email'])) {
                                echo "<a href='checkout.php'>Tài khoản của tôi</a>";
                            } else {
                                echo "<a href='customer/my_account.php?my_orders'>Tài khoản của tôi</a>";
                            }

                            ?>

                        </li>
                        <li class="<?php if ($active == 'Giỏ hàng') echo "active"; ?>">
                            <a href="giohang.php">Giỏ hàng</a>
                        </li>

                        <li class="<?php if ($active == 'Liên hệ chúng tôi') echo "active"; ?>">
                            <a href="lienhe.php">Liên hệ chúng tôi</a>
                        </li>

                    </ul>
                </div>

                <a href="giohang.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> sản phẩm trong giỏ hàng</span>
                </a>
                <div class="navbar-collapse collapse right">
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse"
                        data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">
                    <form method="get" action="#" class="navbar-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="user-query" required>
                            <span class="input-group-btn">
                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Ket thuc Header-->

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
                                        <input type="number" value=1 min=1 name="product_qty" style="width:50px;">
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