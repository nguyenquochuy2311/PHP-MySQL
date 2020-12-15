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

function getProSearch($search1) // Ham lay san pham
{
    global $database;

    $search = $search1;
    $get_products = "select * from products where product_keywords like '%$search%'";

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

function getProducts()
{
    global $database;
    $aWhere = array();

    if (isset($_REQUEST['man']) && is_array($_REQUEST['man'])) {

        foreach ($_REQUEST['man'] as $sKey => $sVal) {

            if ((int)$sVal != 0) {
                $aWhere[] = 'manufacturer_id=' . (int)$sVal;
            }
        }
    }

    if (isset($_REQUEST['cat']) && is_array($_REQUEST['cat'])) {

        foreach ($_REQUEST['cat'] as $sKey => $sVal) {

            if ((int)$sVal != 0) {
                $aWhere[] = 'cat_id=' . (int)$sVal;
            }
        }
    }

    if (isset($_REQUEST['p_cat']) && is_array($_REQUEST['p_cat'])) {

        foreach ($_REQUEST['p_cat'] as $sKey => $sVal) {

            if ((int)$sVal != 0) {
                $aWhere[] = 'p_cat_id=' . (int)$sVal;
            }
        }
    }

    $per_page = 6;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start_from = ($page - 1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere) > 0 ? ' WHERE ' . implode(' or ', $aWhere) : '') . $sLimit;

    $get_products = "select * from products " . $sWhere;
    $run_products = mysqli_query($database, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_image = $row_products['product_img'];

        echo "
        
        <div class='col-md-4 col-sm-6 center-responsive'>
            <div class='product'>
                <a href='chitiet.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='admin_area/product_images/$pro_image'>  
                </a>

                <div class='text'>
                    <h3> $pro_title </h3>

                    <p class='price'> $pro_price <u>đ</u></p>
                    <p class='buttons'>
                        <a class='btn btn-default' href='chitiet.php?pro_id=$pro_id'>Chi tiết</a>
                        <a class='btn btn-primary' href='chitiet.php?pro_id=$pro_id'>
                            <i class='fa fa-shopping-cart'></i> Thêm giỏ hàng
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
        ";
    }
}

function getPaginator()
{
    global $database;

    $per_page = 6;
    $aWhere = array();
    $aPath = '';

    if (isset($_REQUEST['man']) && is_array($_REQUEST['man'])) {
        foreach ($_REQUEST['man'] as $sKey => $sVal) {
            if ((int)$sVal != 0) {

                $aWhere[] = 'manufacturer_id=' . (int)$sVal;
                $aPath .= 'man[]=' . (int)$sVal . '&';
            }
        }
    }

    if (isset($_REQUEST['cat']) && is_array($_REQUEST['cat'])) {
        foreach ($_REQUEST['cat'] as $sKey => $sVal) {
            if ((int)$sVal != 0) {

                $aWhere[] = 'cat_id=' . (int)$sVal;
                $aPath .= 'cat[]=' . (int)$sVal . '&';
            }
        }
    }

    if (isset($_REQUEST['p_cat']) && is_array($_REQUEST['p_cat'])) {
        foreach ($_REQUEST['p_cat'] as $sKey => $sVal) {
            if ((int)$sVal != 0) {

                $aWhere[] = 'p_cat_id=' . (int)$sVal;
                $aPath .= 'p_cat[]=' . (int)$sVal . '&';
            }
        }
    }

    $sWhere = (count($aWhere) > 0 ? ' WHERE ' . implode(' or ', $aWhere) : '');
    $query = "select * from products " . $sWhere;
    $result = mysqli_query($database, $query);
    $total_records = mysqli_num_rows($result);
    $total_pages = ceil($total_records / $per_page);

    echo "<li> <a href='cuahang.php?page=1";
    if (!empty($aPath)) {
        echo "&" . $aPath;
    }

    echo "'>" . 'Trang đầu' . "</a></li>";

    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<li> <a href='cuahang.php?page=" . $i . (!empty($aPath) ? '&' . $aPath : '') . "'>" . $i . "</a></li>";
    }

    echo "<li> <a href='cuahang.php?page=$total_pages'";

    if (!empty($aPath)) {
        echo "&" . $aPath;
    }
    echo "'>" . 'Trang cuối' . "</a></li>";
}

function getProducts_Cat($p_cat_id)
{
    global $database;
    $aWhere = array();

    if (isset($_REQUEST['man']) && is_array($_REQUEST['man'])) {

        foreach ($_REQUEST['man'] as $sKey => $sVal) {

            if ((int)$sVal != 0) {
                $aWhere[] = 'manufacturer_id=' . (int)$sVal;
            }
        }
    }

    if (isset($_REQUEST['cat']) && is_array($_REQUEST['cat'])) {

        foreach ($_REQUEST['cat'] as $sKey => $sVal) {

            if ((int)$sVal != 0) {
                $aWhere[] = 'cat_id=' . (int)$sVal;
            }
        }
    }

    if (isset($_REQUEST['p_cat']) && is_array($_REQUEST['p_cat'])) {

        foreach ($_REQUEST['p_cat'] as $sKey => $sVal) {

            if ((int)$sVal != 0) {
                $aWhere[] = 'p_cat_id=' . (int)$sVal;
            }
        }
    }

    $per_page = 6;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start_from = ($page - 1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere) > 0 ? ' WHERE p_cat_id =' . $p_cat_id . ' ' . implode(' or ', $aWhere) : '') . $sLimit;

    $get_products = "select * from products " . $sWhere;
    $run_products = mysqli_query($database, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_image = $row_products['product_img'];

        echo "
        
        <div class='col-md-4 col-sm-6 center-responsive'>
            <div class='product'>
                <a href='chitiet.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='admin_area/product_images/$pro_image'>  
                </a>

                <div class='text'>
                    <h3> $pro_title </h3>

                    <p class='price'> $pro_price <u>đ</u></p>
                    <p class='buttons'>
                        <a class='btn btn-default' href='chitiet.php?pro_id=$pro_id'>Chi tiết</a>
                        <a class='btn btn-primary' href='chitiet.php?pro_id=$pro_id'>
                            <i class='fa fa-shopping-cart'></i> Thêm giỏ hàng
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
        ";
    }
}