<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h4>L I X I B O X</h4>
                <p class="text-muted">www.lixibox.com là kênh mua sắm mỹ phẩm, làm đẹp hàng đầu Việt Nam được các beauty
                    blogger lựa chọn
                    để giới thiệu sản phẩm họ yêu thích tới khách hàng, người hâm mộ.</p>
            </div>

            <div class="col-sm-6 col-md-3">
                <h4>Danh mục sản phẩm</h4>
                <ul>
                    <?php

                    $get_p_cats = "select * from product_categories";
                    $run_p_cats = mysqli_query($conn, $get_p_cats);

                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
                        $p_cat_id = $row_p_cats['p_cat_id'];
                        $p_cat_title = $row_p_cats['p_cat_title'];
                        echo "
                        
                        <li>
                            <a href='../cuahang.php?p_cat=$p_cat_id'>
                                $p_cat_title
                            </a>
                        </li>    

                        ";
                    }

                    ?>
                </ul>
                <hr class="hidden-md hidden-lg">
            </div>

            <div class="col-sm-6 col-md-3">
                <h4>Thông tin & hướng dẫn</h4>
                <ul>
                    <li>
                        <a href="#">Về LIXIBOX</a>
                    </li>
                    <li>
                        <a href="#">Hỗ trợ đơn hàng</a>
                    </li>
                    <li>
                        <a href="#">Cửa hàng Lixibox</a>
                    </li>
                </ul>
                <hr class="hidden-md hidden-lg">
            </div>

            <div class="col-sm-6 col-md-3">
                <h4>Tải ứng dụng LIXIBOX</h4>
                <h4>Hotline: 0375119131</h4>
                <hr>
                <p class="social">
                    <a href="https://www.facebook.com/lixiboxvn/" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/lixibox/" class="fa fa-instagram"></a>
                    <a href="https://www.youtube.com/channel/UCW0CxHcD9jN1lhFeKLHwCvQ" class="fa fa-youtube"></a>
                    <a href="https://www.pinterest.com/lixibox/" class="fa fa-pinterest"></a>
                </p>
            </div>
        </div>
    </div>
</div>