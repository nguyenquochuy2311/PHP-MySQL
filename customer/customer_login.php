<div class="box">
    <div class="box-header">
        <center>
            <h1>Đăng nhập</h1>
            <p class="lead">Bạn đã có tài khoản..?</p>
            <p class="text-muted">
                Nếu có bất kỳ câu hỏi gì, vui lòng liên hệ đến mục <a href="../lienhe.php">
                    <bold>Liên hệ</bold>
                </a>. Dịch vụ chăm sóc khách hàng làm việc <strong>24/7</strong>
            </p>
        </center>
    </div>

    <form action="checkout.php" method="post">
        <div class="form-group">
            <label> Email </label>
            <input name="c_email" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label> Mật khẩu </label>
            <input name="c_pass" type="password" class="form-control" required>
        </div>
        <div class="text-center">
            <button name="login" value="login" class="btn btn-primary">
                <i class="fa fa-sign-in"></i> Đăng nhập
            </button>
        </div>
    </form>

    <center>
        <a href="khach_dangky.php">
            <h4> Chưa có tài khoản..? Đăng ký tại đây </h4>
        </a>
    </center>
</div>

<?php

if (isset($_POST['login'])) {
    $customer_email = $_POST['c_email'];
    $customer_pass = $_POST['c_pass'];

    $select_customer = "select * from customers where customer_email='$customer_email' and customer_pass='$customer_pass'";
    $run_customer = mysqli_query($conn, $select_customer);
    $check_customer = mysqli_num_rows($run_customer);

    $get_ip = getRealIpUser();

    $select_cart = "select * from cart where ip_add='$get_ip'";
    $run_cart = mysqli_query($conn, $select_cart);
    $check_cart = mysqli_num_rows($run_cart);

    if ($check_customer == 0) {
        echo "<script>('Email hoặc mật khẩu không đúng')</script>";
        exit();
    }

    if ($check_customer == 1 && $check_cart == 0) {
        $_SESSION['customer_email'] = $customer_email;
        echo "<script>alert('Đăng nhập thành công')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    } else {
        $_SESSION['customer_email'] = $customer_email;
        echo "<script>alert('Đăng nhập thành công')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    }
}

?>