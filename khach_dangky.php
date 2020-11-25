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
                    <li class="active">
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
                        Đăng ký
                    </li>
                </ul>
            </div>

            <div class="col-md-3">
                <?php
                include("includes/sidebar.php");
                ?>
            </div>
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2>Đăng ký người dùng mới</h2>
                        </center>

                        <form action="khach_dangky.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Họ và tên của bạn</label>
                                <input type="text" placeholder="Nhập họ và tên" class="form-control" name="c_name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Email của bạn</label>
                                <input type="text" placeholder="Nhập Email" class="form-control" name="c_email"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu của bạn</label>
                                <input type="password" placeholder="Nhập mật khẩu" class="form-control" name="c_pass"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" placeholder="Nhập mật khẩu" class="form-control" name="c_pass_a"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Tên tỉnh nơi sinh sống</label>
                                <input type="text" placeholder="Nhập tên tỉnh" class="form-control" name="c_country"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Tên thành phố/quận/huyện sinh sống</label>
                                <input type="text" placeholder="Nhập tên thành phố/quận/huyện" class="form-control"
                                    name="c_city" required>
                            </div>
                            <div class="form-group">
                                <label>Liên hệ</label>
                                <input type="text" placeholder="Email hoặc số điện thoại" class="form-control"
                                    name="c_contact" required>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" placeholder="Nhập địa chỉ" class="form-control" name="c_address"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh đại diện</label>
                                <input type="file" class="form-control form-height-custom" name="c_image" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Đăng ký
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
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