<?php

$database = mysqli_connect("localhost", "root", "", "myweb");

if (isset($_GET['add_cart'])) {
    $pro_id = $_GET['add_cart'];
    $ip_add = getRealIpUser();
    $get_product = "select * from products where product_id='$pro_id'";
    $run_product = mysqli_query($database, $get_product);
    $row_product = mysqli_fetch_array($run_product);


    $p_cat_id = $row_product['p_cat_id'];
    $pro_title = $row_product['product_title'];
    $pro_price = $row_product['product_price'];
    $pro_img = $row_product['product_img'];
    $pro_desc = $row_product['product_desc'];

    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    $run_p_cat = mysqli_query($database, $get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_title = $row_p_cat['p_cat_title'];
}


function getRealIpUser()
{

    switch (true) {

        case (!empty($_SERVER['HTTP_X_REAL_IP'])):
            return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])):
            return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
            return $_SERVER['HTTP_X_FORWARDED_FOR'];

        default:
            return $_SERVER['REMOTE_ADDR'];
    }
}

function add_cart()
{
    global $database;

    if (isset($_GET['add_cart'])) {

        $ip_add = getRealIpUser();
        $p_id = $_GET['add_cart'];

        $product_qty = $_POST['product_qty'];
        $product_size = $_POST['product_size'];

        $check_product = "select * from cart where ip_add='$ip_add' and p_id='$p_id'";
        $run_check = mysqli_query($database, $check_product);

        if (mysqli_num_rows($run_check) > 0) {

            echo "<script>alert('Sản phẩm đã tồn tại trong giỏ hàng')</script>";
            echo "<script>window.open('chitiet.php?pro_id=$p_id','_self')</script>";
        } else {
            $query = "insert into cart (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
            $run_query = mysqli_query($database, $query);

            if ($run_query) {
                echo "<script>alert('Thêm sản phẩm vào giỏ hàng thành công')</script>";
                echo "<script>window.open('chitiet.php?pro_id=$p_id','_self')</script>";
            } else {
                echo "<script>alert('Lỗi')</script>";
            }
        }
    }
}

function getPro() // Ham lay san pham
{
    global $database;

    $get_products = "select * from products order by 1 desc limit 0,8";
    $run_products = mysqli_query($database, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {
        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img = $row_products['product_img'];
        echo "
        <div class='col-md-4 col-sm-6 single'>
            <div class='product'>
                <a href='chitiet.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='admin_area/product_images/$pro_img'>
                </a>
                
                <div class='text'>
                    <h3>
                        <a href='chitiet.php?pro_id=$pro_id'>
                            $pro_title
                        </a>
                    </h3>

                    <p class='price'>
                        <strong>$pro_price đ</strong>
                    </p>

                    <p class='button'>
                        <a class='btn btn-default' href='chitiet.php?pro_id=$pro_id'>
                            Chi tiết
                        </a>
                        
                        <a class='btn btn-primary' href='chitiet.php?pro_id=$pro_id'>
                            <i class='fa fa-shopping-cart'></i> Giỏ hàng
                        </a>
                    </p>
                </div>
            </div>
        </div>
        ";
    }
}

function getPCats() //Ham lay danh muc san pham
{
    global $database;

    $get_p_cats = "select * from product_categories";
    $run_p_cats = mysqli_query($database, $get_p_cats);

    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];

        echo "
            <li>
                <a href='cuahang.php?p_cat=$p_cat_id'> $p_cat_title</a>
            </li>

        ";
    }
}

function getCats() //Ham lay danh muc gioi tinh
{
    global $database;

    $get_cats = "select * from categories";
    $run_cats = mysqli_query($database, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "
            <li>
                <a href='cuahang.php?cat=$cat_id'> $cat_title</a>
            </li>

        ";
    }
}

function getpcatpro()
{
    global $database;

    if (isset($_GET['p_cat'])) {
        $p_cat_id = $_GET['p_cat'];
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($database, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];
        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products = "select * from products where p_cat_id='$p_cat_id'";
        $run_products = mysqli_query($database, $get_products);
        $count = mysqli_num_rows($run_products);

        if ($count == 0) {
            echo "
            <div class='box'>
                <h2> Không tìm thấy sản phẩm trong danh mục sản phẩm <strong>$p_cat_title</strong></h2>
            </div>
            ";
        } else {
            echo "
            <div class='box'>
                <h1>$p_cat_title</h1>
                <p>$p_cat_desc</p>
            </div>
            ";
        }
        while ($row_products = mysqli_fetch_array($run_products)) {
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img = $row_products['product_img'];
            echo "
               <div class='col-md-4 col-sm-6 center-responsive'>
                    <div class='product'>
                        <a href='chitiet.php?pro_id=$pro_id'>
                            <img class='img-responsive' src='admin_area/product_images/$pro_img'>
                        </a>
                        
                        <div class='text'>
                            <h3>
                                <a href='chitiet.php?pro_id=$pro_id'>
                                    $pro_title
                                </a>
                            </h3>

                            <p class='price'>
                                <strong>$pro_price đ</strong>
                            </p>

                            <p class='button'>
                                <a class='btn btn-default' href='chitiet.php?pro_id=$pro_id'>
                                    Chi tiết
                                </a>
                                
                                <a class='btn btn-primary' href='chitiet.php?pro_id=$pro_id'>
                                    <i class='fa fa-shopping-cart'></i> Giỏ hàng
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            ";
        }
    }
}

function getcatpro()
{
    global $database;

    if (isset($_GET['cat'])) {
        $cat_id = $_GET['cat'];
        $get_cat = "select * from categories where cat_id='$cat_id'";
        $run_cat = mysqli_query($database, $get_cat);
        $row_cat = mysqli_fetch_array($run_cat);

        $cat_title = $row_cat['cat_title'];
        $cat_desc = $row_cat['cat_desc'];

        $get_products = "select * from products where cat_id='$cat_id' LIMIT 0,6";
        $run_products = mysqli_query($database, $get_products);
        $count = mysqli_num_rows($run_products);

        if ($count == 0) {
            echo "
            <div class='box'>
                <h2> Không tìm thấy sản phẩm trong danh mục giới tính <strong>$cat_title</strong></h2>
            </div>
            ";
        } else {
            echo "
            <div class='box'>
                <h1>$cat_title</h1>
                <p>$cat_desc</p>
            </div>
            ";
        }
        while ($row_products = mysqli_fetch_array($run_products)) {
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img = $row_products['product_img'];
            $pro_desc = $row_products['product_desc'];
            echo "
               <div class='col-md-4 col-sm-6 center-responsive'>
                    <div class='product'>
                        <a href='chitiet.php?pro_id=$pro_id'>
                            <img class='img-responsive' src='admin_area/product_images/$pro_img'>
                        </a>
                        
                        <div class='text'>
                            <h3>
                                <a href='chitiet.php?pro_id=$pro_id'>
                                    $pro_title
                                </a>
                            </h3>

                            <p class='price'>
                                <strong>$pro_price đ</strong>
                            </p>

                            <p class='button'>
                                <a class='btn btn-default' href='chitiet.php?pro_id=$pro_id'>
                                    Chi tiết
                                </a>
                                
                                <a class='btn btn-primary' href='chitiet.php?pro_id=$pro_id'>
                                    <i class='fa fa-shopping-cart'></i> Giỏ hàng
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            ";
        }
    }
}

function items()
{
    global $database;

    $ip_add = getRealIpUser();

    $get_items = "select * from cart where ip_add='$ip_add'";
    $run_items = mysqli_query($database, $get_items);
    $count_items = mysqli_num_rows($run_items);

    echo $count_items;
}

function total_price()
{
    $total = 0;
    global $database;
    $ip_add = getRealIpUser();
    $select_cart = "select * from cart where ip_add='$ip_add'";
    $run_cart = mysqli_query($database, $select_cart);

    while ($record = mysqli_fetch_array($run_cart)) {
        $pro_id = $record['p_id'];
        $pro_qty = $record['qty'];

        $get_price = "select * from products where product_id='$pro_id'";
        $run_price = mysqli_query($database, $get_price);
        while ($row_price = mysqli_fetch_array($run_price)) {
            $sub_total = $row_price['product_price'] * $pro_qty;
            $total += $sub_total;
        }
    }
    echo "<strong>$total</strong> <u>đ</u>";
}