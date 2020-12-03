<center>
    <h1>Thay đổi mật khẩu</h1>
    <p class="text-muted">
        Nếu có bất kỳ câu hỏi gì, vui lòng liên hệ đến mục <a href="../lienhe.php">
            <bold>Liên hệ</bold>
        </a>. Dịch vụ chăm sóc khách hàng làm việc <strong>24/7</strong>
    </p>
</center>

<hr>

<form action="" method="post">
    <div class="form-group">
        <label> Mật khẩu cũ của bạn </label>
        <input type="password" name="old_pass" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Mật khẩu mới của bạn </label>
        <input type="password" name="new_pass" class="form-control" required>
    </div>

    <div class="form-group">
        <label> Xác nhận mật khẩu mới </label>
        <input type="password" name="new_pass_again" class="form-control" required>
    </div>

    <div class="text-center">
        <button name="submit" type="submit" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Xác nhận thay đổi
        </button>
    </div>

</form>

<?php

if (isset($_POST['submit'])) {

    $c_email = $_SESSION['customer_email'];

    $c_old_pass = $_POST['old_pass'];

    $c_new_pass = $_POST['new_pass'];

    $c_new_pass_again = $_POST['new_pass_again'];

    $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass'";

    $run_c_old_pass = mysqli_query($conn, $sel_c_old_pass);

    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);

    if ($check_c_old_pass == 0) {

        echo "<script>alert('Xin lỗi, mật khẩu không tồn tại. Vui lòng thử lại')</script>";

        exit();
    }

    if ($c_new_pass != $c_new_pass_again) {

        echo "<script>alert('Xin lỗi, nhập lại mật khẩu không khớp')</script>";

        exit();
    }

    $update_c_pass = "update customers set customer_pass='$c_new_pass' where customer_email='$c_email'";

    $run_c_pass = mysqli_query($conn, $update_c_pass);

    if ($run_c_pass) {

        echo "<script>alert('Mật khẩu của bạn đã đổi thành công')</script>";

        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    }
}

?>