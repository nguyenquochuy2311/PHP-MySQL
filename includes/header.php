<?php

session_start();

include("includes/database.php");
include("functions/functions.php");

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
                    <img style="width:83px;height:33px;" src="images/logo.jpg" alt="Lixibox Logo Mobile" class="visible-xs">
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
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
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