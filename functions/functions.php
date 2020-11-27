<?php

$database = mysqli_connect("localhost", "root", "", "myweb");

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
                        $pro_price đ
                    </p>

                    <p class='button'>
                        <a class='btn btn-default' href='chitiet.php?pro_id=$pro_id'>
                            Chi tiết
                        </a>
                        
                        <a class='btn btn-primary   ' href='chitiet.php?pro_id=$pro_id'>
                            <i class='fa fa-shopping-cart'></i> Giỏ hàng
                        </a>
                    </p>
                </div>
            </div>
        </div>
        ";
    }
}

function getPCat() //Ham lay danh muc san pham
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

function getCat() //Ham lay danh muc gioi tinh
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
