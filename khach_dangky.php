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