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
            <?php

            if (!isset($_SESSION['customer_email'])) {
                include("customer/customer_login.php");
            } else {
                include("payment_options.php");
            }

            ?>
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