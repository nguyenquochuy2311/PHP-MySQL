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
                        <li>
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="active">
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
                <h3 style="text-align:center;">Sản phẩm</h3>
                <div class="row">
                    <div class="col-md-4 col-sm-6 center-responsive">
                        <div class="product">
                            <a href="chitiet.php">
                                <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1">
                            </a>
                            <div class="text">
                                <h3>
                                    <a href="chitiet.php">Kem chống nắng nhẹ</a>
                                </h3>
                                <p class="price">336.000</p>
                                <p class="button">
                                    <a href="chitiet.php" class="btn btn-default">Chi tiết</a>
                                    <a href="#" class="btn btn-primary">
                                        <i class="fa fa-shopping-cart"> Thêm giỏ hàng</i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 center-responsive">
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

                    <div class="col-md-4 col-sm-6 center-responsive">
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

                    <div class="col-md-4 col-sm-6 center-responsive">
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

                    <div class="col-md-4 col-sm-6 center-responsive">
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

                    <div class="col-md-4 col-sm-6 center-responsive">
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

                    <center>
                        <ul class="pagination">
                            <li><a href="#">Trang đầu</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Trang cuối</a></li>
                        </ul>
                    </center>
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