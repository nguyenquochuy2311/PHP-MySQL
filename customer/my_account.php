<?php
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
                <?php
                if (isset($_GET['my_orders'])) {
                    include("my_orders.php");
                }
                ?>

                <?php
                if (isset($_GET['pay_offline'])) {
                    include("pay_offline.php");
                }
                ?>

                <?php
                if (isset($_GET['edit_account'])) {
                    include("edit_account.php");
                }
                ?>

                <?php
                if (isset($_GET['change_pass'])) {
                    include("change_pass.php");
                }
                ?>

                <?php
                if (isset($_GET['delete_account'])) {
                    include("delete_account.php");
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