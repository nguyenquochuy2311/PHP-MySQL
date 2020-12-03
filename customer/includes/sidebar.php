<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <?php

        $session_email = $_SESSION['customer_email'];

        $select_customer = "select * from customers where customer_email='$session_email'";
        $run_customer = mysqli_query($conn, $select_customer);
        $row_customer = mysqli_fetch_array($run_customer);

        $customer_image = $row_customer['customer_image'];
        $customer_name = $row_customer['customer_name'];

        if (!isset($_SESSION['customer_email'])) {
        } else {
            echo "

            <center>
                <img style='width:210px;height:270px;' src='customer_images/$customer_image' alt='Customer Image'>
            </center>
            <br />
            <h1 style='font-size:20px;' align='center' class='panel-title'>
                <strong>$customer_name</strong>
            </h1>
 
            ";
        }
        ?>

    </div>

    <div class="panel-body">
        <ul class="nav-pills nav-stacked nav">
            <li class="<?php
                        if (isset($_GET['my_orders'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> Đơn hàng của tôi
                </a>
            </li>

            <li class="<?php
                        if (isset($_GET['pay_offline'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Thanh toán offline
                </a>
            </li>

            <li class="<?php
                        if (isset($_GET['edit_account'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Chỉnh sửa thông tin
                </a>
            </li>

            <li class="<?php
                        if (isset($_GET['change_pass'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Thay đổi mật khẩu
                </a>
            </li>

            <li class="<?php
                        if (isset($_GET['delete_account'])) {
                            echo "active";
                        } ?>">
                <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i> Xoá tài khoản
                </a>
            </li>

            <li>
                <a class="logout.php">
                    <i class="fa fa-sign-out"></i> Đăng xuất
                </a>
            </li>

        </ul>
    </div>
</div>