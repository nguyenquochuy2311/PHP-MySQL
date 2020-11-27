<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <center>
            <img style="width:210px;height:270px;" src="customer_images/customer.jpg" alt="Customer Image">
        </center>
        <br />
        <h3 align="center" class="panel-title">
            <strong>Nguyễn Quốc Huy</strong>
        </h3>
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

            <li class="">
                <a class="logout. php">
                    <i class="fa fa-sign-out"></i> Đăng xuất
                </a>
            </li>

        </ul>
    </div>
</div>