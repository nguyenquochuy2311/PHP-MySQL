<?php

session_start();

if (!isset($_SESSION['customer_email'])) {
    echo "<script>window.open('../checkout.php','_self')</script>";
} else {

    include("includes/database.php");
    include("functions/functions.php");

    if (isset($_GET['order_id'])) {
        $order_id = $_GET['order_id'];
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
                <a href="#" class="btn btn-success btn-sm">

                    <?php

                        if (!isset($_SESSION['customer_email'])) {
                            echo "Chào mừng: Quý khách";
                        } else {
                            echo "Chào mừng: " . $_SESSION['customer_email'] . "";
                        }

                        ?>

                </a>
                <a href="checkout.php"><?php items(); ?> sản phẩm trong giỏ hàng | Tổng tiền: <?php total_price(); ?>
                </a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="../khach_dangky.php">Đăng ký</a>
                    </li>
                    <li>
                        <a href="my_account.php">Tài khoản của tôi</a>
                    </li>
                    <li>
                        <a href="../giohang.php">Giỏ hàng</a>
                    </li>
                    <li>
                        <a href="../checkout.php">

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
                <a href="../index.php" class="navbar-brand home">
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
                            <a href="../index.php">Trang chủ</a>
                        </li>
                        <li>
                            <a href="../cuahang.php">Cửa hàng</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">Tài khoản của tôi</a>
                        </li>
                        <li>
                            <a href="../giohang.php">Giỏ hàng</a>
                        </li>
                        <li>
                            <a href="../lienhe.php">Liên hệ chúng tôi</a>
                        </li>
                    </ul>
                </div>
                <a href="../giohang.php" class="btn navbar-btn btn-primary right">
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
                        <a href="../index.php">Trang chủ</a>
                    </li>
                    <li>
                        Tài khoản của tôi
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
                    <h1 align="center"> Xác nhận thanh toán </h1>
                    <form action="confirm.php?update_id=<?php echo $order_id;  ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label> Mã hoá đơn </label>
                            <input type="text" class="form-control" name="invoice_no" required>
                        </div>

                        <div class="form-group">
                            <label> Số tiền gửi</label>
                            <input type="text" class="form-control" name="amount_sent" required>
                        </div>

                        <div class="form-group">
                            <label> Chọn hình thức thanh toán</label>
                            <select name="payment_mode" class="form-control" required>
                                <option disabled selected> Chọn hình thức thanh toán</option>
                                <option> 1</option>
                                <option> 2</option>
                                <option> 3</option>
                                <option> 4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Mã giao dịch</label>
                            <input type="text" class="form-control" name="ref_no" required>
                        </div>

                        <div class="form-group">
                            <label> Omni Paisa / Easy Paisa</label>
                            <input type="text" class="form-control" name="code" required>
                        </div>

                        <div class="form-group">
                            <label> Ngày thanh toán</label>
                            <input type="date" class="form-control" name="date" required>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary btn-lg" name="confirm_payment">
                                <i class="fa fa-user-md"></i> Xác nhận thanh toán
                            </button>
                        </div>
                    </form>

                    <?php

                        if (isset($_POST['confirm_payment'])) {

                            $update_id = $_GET['update_id'];

                            $invoice_no = $_POST['invoice_no'];

                            $amount = $_POST['amount_sent'];

                            $payment_mode = $_POST['payment_mode'];

                            $ref_no = $_POST['ref_no'];

                            $code = $_POST['code'];

                            $payment_date = $_POST['date'];

                            $complete = "Hoàn tất";

                            $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values 
                            ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

                            $run_payment = mysqli_query($conn, $insert_payment);

                            $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";

                            $run_customer_order = mysqli_query($conn, $update_customer_order);

                            $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";

                            $run_pending_order = mysqli_query($conn, $update_pending_order);

                            if ($run_pending_order) {

                                echo "<script>alert('Cảm ơn đã mua hàng của chúng tôi, đơn đặt hàng của bạn sẽ được hoàn tất trong 24h tới')</script>";

                                echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                            }
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

<?php } ?>