<?php

include("includes/database.php");

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
                <a href="#" class="btn btn-success btn-sm">Chào mừng</a>
                <a href="#">4 sản phẩm trong giỏ hàng | Tổng tiền:</a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="khach_dangky.php">Đăng ký</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">Tài khoản của tôi</a>
                    </li>
                    <li>
                        <a href="giohang.php">Giỏ hàng</a>
                    </li>
                    <li>
                        <a href="#">Đăng nhập</a>
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
                    <span class="sr-only">Toggle Navigation</span>
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
                        <li class="active">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li>
                            <a href="cuahang.php">Cửa hàng</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">Tài khoản của tôi</a>
                        </li>
                        <li>
                            <a href="giohang.php">Giỏ hàng</a>
                        </li>
                        <li>
                            <a href="lienhe.php">Liên hệ chúng tôi</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>3 sản phẩm trong giỏ hàng</span>
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

    <!--Bat dau Slide-->
    <div class="container" id="slider">
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                    $get_slides = "select * from slider LIMIT 0,1";
                    $run_slider = mysqli_query($conn, $get_slides);
                    while ($row_slides = mysqli_fetch_array($run_slider)) {
                        $slide_name = $row_slides['slider_name'];
                        $slide_image = $row_slides['slider_image'];
                        echo "
                            <div class='item active'>
                                <img style='width:1100px;height:490px;' src='admin_area/slides_images/$slide_image'>
                            </div>
                            ";
                    }

                    $get_slides = "select * from slider LIMIT 1,2";
                    $run_slider = mysqli_query($conn, $get_slides);
                    while ($row_slides = mysqli_fetch_array($run_slider)) {
                        $slide_name = $row_slides['slider_name'];
                        $slide_image = $row_slides['slider_image'];
                        echo "
                            <div class='item'>
                                <img style='width:1100px;height:490px;' src='admin_area/slides_images/$slide_image'>
                            </div>
                            ";
                    }

                    ?>
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
    <!--Ket thuc Slide-->

    <!--Bat dau khung Hot deal-->
    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>HOT DEAL</h2>
                </div>
            </div>
        </div>
    </div>
    <!--Ket thuc khung Hot deal-->

    <!--Bat dau content cua hot deal-->
    <div id="content" class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="#">
                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="#">Kem chống nắng nhẹ</a>
                        </h3>
                        <p class="price">336.000</p>
                        <p class="button">
                            <a href="#" class="btn btn-default">Chi tiết</a>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="#">
                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="#">Kem chống nắng nhẹ</a>
                        </h3>
                        <p class="price">336.000</p>
                        <p class="button">
                            <a href="#" class="btn btn-default">Chi tiết</a>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="#">
                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="#">Kem chống nắng nhẹ</a>
                        </h3>
                        <p class="price">336.000</p>
                        <p class="button">
                            <a href="#" class="btn btn-default">Chi tiết</a>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="#">
                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="#">Kem chống nắng nhẹ</a>
                        </h3>
                        <p class="price">336.000</p>
                        <p class="button">
                            <a href="#" class="btn btn-default">Chi tiết</a>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="#">
                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="#">Kem chống nắng nhẹ</a>
                        </h3>
                        <p class="price">336.000</p>
                        <p class="button">
                            <a href="#" class="btn btn-default">Chi tiết</a>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="#">
                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="#">Kem chống nắng nhẹ</a>
                        </h3>
                        <p class="price">336.000</p>
                        <p class="button">
                            <a href="#" class="btn btn-default">Chi tiết</a>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="#">
                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="#">Kem chống nắng nhẹ</a>
                        </h3>
                        <p class="price">336.000</p>
                        <p class="button">
                            <a href="#" class="btn btn-default">Chi tiết</a>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="#">
                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="#">Kem chống nắng nhẹ</a>
                        </h3>
                        <p class="price">336.000</p>
                        <p class="button">
                            <a href="#" class="btn btn-default">Chi tiết</a>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Ket thuc content cua hot deal-->
    <?php
    include("includes/footer.php");
    ?>
    <script src="js/jquery-331.js"></script>
    <script src="js/boostrap-337.js"></script>
</body>

</html>