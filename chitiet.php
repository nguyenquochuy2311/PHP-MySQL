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
                    Cửa hàng
                </li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php
            include("includes/sidebar.php");
            ?>
        </div>

        <div class="col-md-9">
            <div id="productMain" class="row">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <div id="myCarousel" class="carousel slide" data-target="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img src="images/kemchongnang1.jpg" alt="Kem chong nang 1" class="img-responsive"></center>
                                </div>
                                <div class="item">
                                    <center><img src="images/kemchongnang2.jpg" alt="Kem chong nang 2" class="img-responsive"></center>
                                </div>
                                <div class="item">
                                    <center><img src="images/kemchongnang2.jpg" alt="Kem chong nang 2" class="img-responsive"></center>
                                </div>
                            </div>

                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Truoc</span>
                            </a>

                            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Sau</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="box">
                        <h1 class="text-center">Kem chống nắng nhẹ</h1>
                        <form action="chitiet.php" class="form-horizontal" method="post">
                            <div class="form-group">
                                <label for="" class="col-md-5 control-label">Chất lượng</label>

                                <div class="col-md-7">
                                    <select name="product-quality" id="" class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-5 control-label">Kích cỡ</label>
                                <div class="col-md-7">
                                    <select name="product-size" class="form-control">
                                        <option value="">Select size</option>
                                        <option value="">Small</option>
                                        <option value="">Medium</option>
                                        <option value="">Large</option>
                                    </select>
                                </div>
                            </div>

                            <p class="price">336.000</p>

                            <p class="text-center button">
                                <button class="btn btn-primary i fa fa-shopping-cart"> Thêm giỏ hàng</button>
                            </p>
                        </form>
                    </div>

                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                <img src="images/suaruamat1.jpg" alt="Kem chong nang 1" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                <img src="images/suaruamat1.jpg" alt="Kem chong nang 2" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                <img src="images/suaruamat1.jpg" alt="Kem chong nang 3" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box" id="details">
                <h4>Chi tiết sản phẩm</h4>
                <p>- Chiết xuất rau má vùng Madagascar giàu vitamin B,C và polyphenols có khả năng chống oxi
                    hoá,phục hồi,làm dịu da,kháng viêm,giảm thâm,giúp da trắng sáng mịn màng,hỗ trợ điều trị mụn</p>

                <p>- Niacinamide : một chất dưỡng trắng da an toàn có khả năng làm tăng hệ miễn dịch của da,điều
                    tiết bã nhờn,bảo vệ da khỏi tác hại tia UV,ức chế melanin giúp da trắng sáng.
                    <p>

                        <p>- Kết cấu dạng lotion,mỏng nhẹ trên da,không cay mắt và ko bết dính khó chịu.</p>
                        <h4>Size</h4>
                        <ul>
                            <li>Small</li>
                            <li>Medium</li>
                            <li>Large</li>
                        </ul>
            </div>

            <div id="row same-heigh-row">
                <div class="col-md-3 col-sm-6">
                    <div class="box same-height headline">
                        <h3 class="text-center">Sản phẩm liên quan</h3>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="chitiet.php">
                            <img src="images/xitchongnang1.jpg" alt="Product 4" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="chitiet.php">Xịt chống nắng</a></h3>
                            <p class="price">336000</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="chitiet.php">
                            <img src="images/xitchongnang1.jpg" alt="Product 4" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="chitiet.php">Xịt chống nắng</a></h3>
                            <p class="price">336000</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="chitiet.php">
                            <img src="images/xitchongnang1.jpg" alt="Product 4" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="chitiet.php">Xịt chống nắng</a></h3>
                            <p class="price">336000</p>
                        </div>
                    </div>
                </div>
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