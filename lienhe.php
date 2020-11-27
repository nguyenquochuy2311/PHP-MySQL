<?php
$active = 'Liên hệ chúng tôi';
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
                    Liên hệ với chúng tôi
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
                        <h2>Gửi yêu cầu hỗ trợ</h2>
                    </center>

                    <form action="lienhe.php" method="post">
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" placeholder="Họ và tên" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" placeholder="Email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu</label>
                            <select>
                                <option>Huỷ đơn hàng</option>
                                <option>Đổi trả sản phẩm lỗi</option>
                                <option>Xuất hoá đơn</option>
                                <option>Hỗ trợ bảo hành</option>
                                <option>Khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mã đơn hàng</label>
                            <input type="text" placeholder="Mã đơn hàng" class="form-control" name="id" required>
                        </div>
                        <div class="form-group">
                            <label>Mô tả yêu cầu</label>
                            <textarea name="message" placeholder="Nội dung yêu cầu" class="form-control" cols="30"
                                rows="10"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Gửi yêu cầu
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