<?php
$active = 'Tài khoản của tôi';
include("includes/header.php");

?>

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
                            <input type="text" placeholder="Nhập họ và tên" class="form-control" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <label>Email của bạn</label>
                            <input type="text" placeholder="Nhập Email" class="form-control" name="c_email" required>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu của bạn</label>
                            <input type="password" placeholder="Nhập mật khẩu" class="form-control" name="c_pass"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" placeholder="Nhập lại mật khẩu" class="form-control" name="c_pass_a"
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
                            <button type="submit" name="register" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Đăng ký
                            </button>
                        </div>
                    </form>
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


<?php

if (isset($_POST['register'])) {
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_pass_a = $_POST['c_pass_a'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    $c_ip = getRealIpUser();

    move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

    if ($c_pass != $c_pass_a) {
        echo "<script>alert('Xác nhận mật khẩu không khớp, vui lòng kiểm tra lại')</script>";
    } else {
        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) 
        values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

        $run_customer = mysqli_query($conn, $insert_customer);
        $sel_cart = "select * from cart where ip_add='$c_ip'";
        $run_cart = mysqli_query($conn, $sel_cart);

        $check_cart = mysqli_num_rows($run_cart);

        if ($check_cart > 0) {

            //Neu dang ky co san pham trong gio hang
            $_SESSION['customer_email'] = $c_email;
            //echo "<script>alert('$c_name $c_email $c_pass $c_country $c_city $c_contact $c_address $c_image $c_ip')</script>";
            echo "<script>alert('Đăng ký tài khoản thành công (1)')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        } else {

            //Neu dang ky ma khong co san pham trong gio hang
            $_SESSION['customer_email'] = $c_email;
            echo "<script>alert('Đăng ký tài khoản thành công (2)')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
}

?>

</body>