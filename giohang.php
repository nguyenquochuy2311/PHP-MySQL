<?php
$active = 'Giỏ hàng';
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
                    Giỏ hàng
                </li>
            </ul>
        </div>

        <div id="cart" class="col-md-9">
            <div class="box">
                <form action="giohang.php" method="post" enctype="multipart/form-data">
                    <h1>Giỏ hàng của bạn</h1>
                    <p class="text-muted">3 sản phẩm</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Kích cỡ</th>
                                    <th colspan="1">Xoá</th>
                                    <th colspan="2">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1a">
                                    </td>
                                    <td>
                                        <a href="#">Kem chống nắng nhẹ</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        336.000
                                    </td>
                                    <td>
                                        Nhỏ
                                    </td>
                                    <td>
                                        <input type="checkbox" name="remove[]">
                                    </td>
                                    <td>
                                        672.000
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>
                                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1a">
                                    </td>
                                    <td>
                                        <a href="#">Kem chống nắng nhẹ</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        336.000
                                    </td>
                                    <td>
                                        Nhỏ
                                    </td>
                                    <td>
                                        <input type="checkbox" name="remove[]">
                                    </td>
                                    <td>
                                        672.000
                                    </td>
                                </tr>
                            </tbody>

                            <tbody>
                                <tr>
                                    <td>
                                        <img class="img-responsive" src="images/kemchongnang1.jpg" alt="Product 1a">
                                    </td>
                                    <td>
                                        <a href="#">Kem chống nắng nhẹ</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        336.000
                                    </td>
                                    <td>
                                        Nhỏ
                                    </td>
                                    <td>
                                        <input type="checkbox" name="remove[]">
                                    </td>
                                    <td>
                                        672.000
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th colspan="5">Tổng tiền</th>
                                    <th colspan="2">1.000.000</th>
                                </tr>
                            </tfoot>

                        </table>
                    </div>

                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="cuahang.php" class="btn btn-default">
                                <i class="fa fa-fa-chevron-circle-left"></i>Quay lại cửa hàng
                            </a>
                        </div>

                        <div class="pull-right">
                            <button type="submit" name="update" value="Cập nhật giỏ hàng" class="btn btn-default">
                                <i class="fa fa-refresh"></i>Cập nhật giỏ hàng
                            </button>

                            <a href="thanhtoan.php" class="btn btn-primary">
                                Tiến hành thanh toán <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </form>
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

        <div class="col-md-3">
            <div id="order-summary" class="box">
                <div class="box-header">
                    <h3>Tổng tiền đơn hàng</h3>
                </div>

                <p class="text-muted">
                    Đã tính tất cả các phí
                </p>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td> Tổng đơn hàng </td>
                                <th> 1.000.000 </th>
                            </tr>
                            <tr>
                                <td> Phí vận chuyển và ship </td>
                                <td> 1.000 </td>
                            </tr>
                            <tr>
                                <td> Thuế </td>
                                <th> 2.000 </th>
                            </tr>
                            <tr class="total">
                                <td> Tổng </td>
                                <th> 1.003.000 </th>
                            </tr>
                        </tbody>
                    </table>
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