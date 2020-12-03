<center>
    <h1>Bạn có chắc chắn muốn xoá tài khoản ?</h1>
    <form action="" method="post">
        <input type="submit" name="Yes" value="Có, tôi muốn xoá tài khoản" class="btn btn-danger">

        <input type="submit" name="No" value="Không, tôi sẽ giữ lại tài khoản" class="btn btn-primary">
    </form>
</center>

<?php

$c_email = $_SESSION['customer_email'];

if (isset($_POST['Yes'])) {

    $delete_customer = "delete from customers where customer_email='$c_email'";

    $run_delete_customer = mysqli_query($conn, $delete_customer);

    if ($run_delete_customer) {

        session_destroy();

        echo "<script>alert('Xoá tài khoản thành công, cảm thấy tiếc vì điều này. Tạm biệt')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

if (isset($_POST['No'])) {

    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
}

?>