<?php

session_start();
include("includes/database.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-337.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <title>Admin Area</title>
</head>

<body>

    <div class="container">
        <form action="" class="form-login" method="post">
            <h2 class="form-login-heading"> Đăng nhập Admin </h2>

            <input type="text" class="form-control" placeholder="Nhập Email" name="admin_email" required>

            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="admin_pass" required>

            <button class="btn btn-lg btn-primary btn-block" name="admin_login">
                Đăng nhập
            </button>
        </form>
    </div>

</body>

</html>

<?php

if (isset($_POST['admin_login'])) {
    $admin_email = mysqli_real_escape_string($conn, $_POST['admin_email']);
    $admin_pass = mysqli_real_escape_string($conn, $_POST['admin_pass']);

    $get_admin = "select * from admins where admin_email='$admin_email' and admin_pass='$admin_pass'";
    $run_admin = mysqli_query($conn, $get_admin);

    $count = mysqli_num_rows($run_admin);

    if ($count == 1) {
        $_SESSION['admin_email'] = $admin_email;

        echo "<script>alert('Đăng nhập thành công')</script>";
        echo "<script>window.open('index.php?dashboard','_self')</script>";
    } else {
        echo "<script>alert('Email hoặc mật khẩu sai')</script>";
    }
}

?>