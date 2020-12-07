<?php

session_start();
include("includes/database.php");

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
    $admin_session = $_SESSION['admin_email'];

    $get_admin = "select * from admins where admin_email='$admin_session'";
    $run_admin = mysqli_query($conn, $get_admin);
    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['admin_id'];
    $admin_name = $row_admin['admin_name'];
    $admin_email = $row_admin['admin_email'];
    $admin_image = $row_admin['admin_image'];
    $admin_country = $row_admin['admin_country'];
    $admin_contact = $row_admin['admin_contact'];
    $admin_job = $row_admin['admin_job'];

    $get_products = "select * from products";
    $run_products = mysqli_query($conn, $get_products);
    $count_products = mysqli_num_rows($run_products);

    $get_customers = "select * from customers";
    $run_customers = mysqli_query($conn, $get_customers);
    $count_customers = mysqli_num_rows($run_customers);

    $get_p_cats = "select * from product_categories";
    $run_p_cats = mysqli_query($conn, $get_p_cats);
    $count_p_cats = mysqli_num_rows($run_p_cats);

    $get_pending_orders = "select * from pending_orders";
    $run_pending_orders = mysqli_query($conn, $get_pending_orders);
    $count_pending_orders = mysqli_num_rows($run_pending_orders);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-337.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <title>Admin Area</title>
</head>

<body>

    <div id="wrapper">

        <?php include("includes/sidebar.php"); ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <?php

                    if (isset($_GET['dashboard'])) {
                        include("dashboard.php");
                    }

                    if (isset($_GET['insert_product'])) {
                        include("insert_product.php");
                    }

                    if (isset($_GET['view_products'])) {
                        include("view_products.php");
                    }

                    if (isset($_GET['delete_product'])) {
                        include("delete_product.php");
                    }

                    if (isset($_GET['edit_product'])) {
                        include("edit_product.php");
                    }

                    if (isset($_GET['insert_p_cat'])) {
                        include("insert_p_cat.php");
                    }

                    if (isset($_GET['view_p_cats'])) {
                        include("view_p_cats.php");
                    }

                    if (isset($_GET['delete_p_cat'])) {
                        include("delete_p_cat.php");
                    }

                    if (isset($_GET['edit_p_cat'])) {
                        include("edit_p_cat.php");
                    }

                    if (isset($_GET['insert_cat'])) {
                        include("insert_cat.php");
                    }

                    if (isset($_GET['view_cats'])) {
                        include("view_cats.php");
                    }

                    if (isset($_GET['delete_cat'])) {
                        include("delete_cat.php");
                    }

                    if (isset($_GET['edit_cat'])) {
                        include("edit_cat.php");
                    }

                    if (isset($_GET['insert_slide'])) {
                        include("insert_slide.php");
                    }

                    if (isset($_GET['view_slides'])) {
                        include("view_slides.php");
                    }

                    if (isset($_GET['delete_slide'])) {
                        include("delete_slide.php");
                    }

                    if (isset($_GET['edit_slide'])) {
                        include("edit_slide.php");
                    }

                    if (isset($_GET['view_customers'])) {
                        include("view_customers.php");
                    }

                    if (isset($_GET['delete_customer'])) {
                        include("delete_customer.php");
                    }

                    if (isset($_GET['view_orders'])) {
                        include("view_orders.php");
                    }

                    if (isset($_GET['delete_order'])) {
                        include("delete_order.php");
                    }

                    if (isset($_GET['view_payments'])) {
                        include("view_payments.php");
                    }

                    if (isset($_GET['delete_payment'])) {
                        include("delete_payment.php");
                    }

                    if (isset($_GET['insert_user'])) {
                        include("insert_user.php");
                    }

                    if (isset($_GET['view_users'])) {
                        include("view_users.php");
                    }

                    if (isset($_GET['delete_user'])) {
                        include("delete_user.php");
                    }

                    if (isset($_GET['user_profile'])) {
                        include("user_profile.php");
                    }

                    if (isset($_GET['insert_box'])) {
                        include("insert_box.php");
                    }

                    if (isset($_GET['view_boxes'])) {
                        include("view_boxes.php");
                    }

                    if (isset($_GET['delete_box'])) {
                        include("delete_box.php");
                    }

                    if (isset($_GET['edit_box'])) {
                        include("edit_box.php");
                    }

                    if (isset($_GET['insert_manufacturer'])) {
                        include("insert_manufacturer.php");
                    }

                    if (isset($_GET['view_manufacturers'])) {
                        include("view_manufacturers.php");
                    }

                    if (isset($_GET['edit_manufacturer'])) {
                        include("edit_manufacturer.php");
                    }

                    if (isset($_GET['delete_manufacturer'])) {
                        include('delete_manufacturer.php');
                    }
                    ?>
            </div>
        </div>
    </div>

    <script src="js/jquery-331.js"></script>
    <script src="js/boostrap-337.js"></script>
</body>

</html>

<?php } ?>