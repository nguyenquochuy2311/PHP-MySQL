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
                        <li>
                            <a href="cuahang.php">Cửa hàng</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">Tài khoản của tôi</a>
                        </li>
                        <li class="active">
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
                        Giỏ hàng
                    </li>
                </ul>
            </div>

            <div id="cart" class="col-md-9">
                <div class="box">
                    <form action="giohang.php" method="post" enctype="multipart/form-data">
                        <h1>Giỏ hàng của bạn</h1>
                        <p class="text-muted">3 sản phẩm</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>Kích cỡ</th>
                                        <th colspan="1">Xoá</th>
                                        <th colspan="2">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1a">
                                        </td>
                                        <td>
                                            <a href="#">Kem chống nắng nhẹ</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            336.000
                                        </td>
                                        <td>
                                            Nhỏ
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            672.000
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1a">
                                        </td>
                                        <td>
                                            <a href="#">Kem chống nắng nhẹ</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            336.000
                                        </td>
                                        <td>
                                            Nhỏ
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            672.000
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1a">
                                        </td>
                                        <td>
                                            <a href="#">Kem chống nắng nhẹ</a>
                                        </td>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            336.000
                                        </td>
                                        <td>
                                            Nhỏ
                                        </td>
                                        <td>
                                            <input type="checkbox" name="remove[]">
                                        </td>
                                        <td>
                                            672.000
                                        </td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th colspan="5">Tổng tiền</th>
                                        <th colspan="2">1.000.000</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-fa-chevron-circle-left"></i>Quay lại cửa hàng
                                </a>
                            </div>

                            <div class="pull-right">
                                <button type="submit" name="update" value="Cập nhật giỏ hàng" class="btn btn-default">
                                    <i class="fa fa-refresh"></i>Cập nhật giỏ hàng
                                </button>

                                <a href="thanhtoan.php" class="btn btn-primary">
                                    Tiến hành thanh toán <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="row same-heigh-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">Sản phẩm liên quan</h3>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="chitiet.php">
                                <img src="images/xitchongnang1.jpg" alt="Product 4" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="chitiet.php">Xịt chống nắng</a></h3>
                                <p class="price">336000</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="chitiet.php">
                                <img src="images/xitchongnang1.jpg" alt="Product 4" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="chitiet.php">Xịt chống nắng</a></h3>
                                <p class="price">336000</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 center-responsive">
                        <div class="product same-height">
                            <a href="chitiet.php">
                                <img src="images/xitchongnang1.jpg" alt="Product 4" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="chitiet.php">Xịt chống nắng</a></h3>
                                <p class="price">336000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div id="order-summary" class="box">
                    <div class="box-header">
                        <h3>Tổng tiền đơn hàng</h3>
                    </div>

                    <p class="text-muted">
                        Đã tính tất cả các phí
                    </p>

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td> Tổng đơn hàng </td>
                                    <th> 1.000.000 </th>
                                </tr>
                                <tr>
                                    <td> Phí vận chuyển và ship </td>
                                    <td> 1.000 </td>
                                </tr>
                                <tr>
                                    <td> Thuế </td>
                                    <th> 2.000 </th>
                                </tr>
                                <tr class="total">
                                    <td> Tổng </td>
                                    <th> 1.003.000 </th>
                                </tr>
                            </tbody>
                        </table>
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

</html>