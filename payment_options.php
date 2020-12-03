<div class="box">

    <?php

    $session_email = $_SESSION['customer_email'];

    $select_customer = "select * from customers where customer_email='$session_email'";

    $run_customer = mysqli_query($conn, $select_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $customer_id = $row_customer['customer_id'];
    ?>

    <h1 class="text-center">Hình thức thanh toán</h1>
    <p class="lead text-center">

        <a href="order.php?c_id=<?php echo $customer_id ?>"> Thanh toán offline </a>

    </p>

    <center>
        <p class="lead">
            <a href="#">
                Thanh toán bằng AirPay
                <hr>
                <img class="img-responsive" src="images/paypal_logo.jpg" alt="img-airpay">
            </a>
        </p>
    </center>
</div>