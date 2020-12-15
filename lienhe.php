<?php
$active = 'Liên hệ chúng tôi';
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
                    Liên hệ với chúng tôi
                </li>
            </ul>
        </div>

        <div class="col-md-3">
            <?php
            include("includes/sidebar.php");
            ?>
        </div>
        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2>Gửi yêu cầu hỗ trợ</h2>
                    </center>

                    <form action="lienhe.php" method="post">
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" placeholder="Họ và tên" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" placeholder="Email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu</label>
                            <select name="subject" required>
                                <option>Huỷ đơn hàng</option>
                                <option>Đổi trả sản phẩm lỗi</option>
                                <option>Xuất hoá đơn</option>
                                <option>Hỗ trợ bảo hành</option>
                                <option>Khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mã đơn hàng</label>
                            <input type="text" placeholder="Mã đơn hàng" class="form-control" name="id" required>
                        </div>
                        <div class="form-group">
                            <label>Mô tả yêu cầu</label>
                            <textarea name="message" placeholder="Nội dung yêu cầu" class="form-control" cols="30"
                                rows="10"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Gửi yêu cầu
                            </button>
                        </div>
                    </form>

                    <?php

                    if (isset($_POST['submit'])) {
                        $sender_name = $_POST['name'];
                        $sender_email = $_POST['email'];
                        $sender_subject = $_POST['subject'];
                        $sender_id = $_POST['id'];
                        $sender_message = $_POST['message'];

                        $receiver_email = "nguyenquochuyhbt@gmail.com";
                        mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                        //Tu dong gui toi nguoi gui voi noi dung

                        $email = $_POST['email'];
                        $subject = $_POST['subject'];

                        $wc = "Chào mừng bạn đến với LIXIBOX";
                        $msg = "Cảm ơn bạn đã gửi tin nhắn cho chúng tôi với nội dung chính " . $subject . ". Chúng tôi sẽ phản hồi tin nhắn của bạn";
                        $from = "nguyenquochuyhbt@gmail.com";

                        mail($email, $wc, $msg, $from);

                        echo "<h2 align='center'> Tin nhắn của bạn đã được gửi thành công </h2>";
                    }

                    ?>

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

<script>
$(document).ready(function() {
    $('.nav-toggle').click(function() {
        $('.panel-collapse,.collapse-data').slideToggle(700, function() {

            if ($(this).css('display') == 'none') {
                $(".hide-show").html('Mở');
            } else {
                $(".hide-show").html('Ẩn');
            }

        });
    });

    $(function() {
        $.fn.extend({
            filterTable: function() {
                return this.each(function() {

                    $(this).on('keyup', function() {

                        var $this = $(this),
                            search = $this.val().toLowerCase(),
                            target = $this.attr('data-filters'),
                            handle = $(target),
                            rows = handle.find('li a');

                        if (search == '') {
                            rows.show();
                        } else {
                            rows.each(function() {
                                var $this = $(this);

                                $this.text().toLowerCase().indexOf(
                                        search) === -1 ?
                                    $this.hide() : $this.show();
                            });
                        }
                    });
                });
            }
        });
        $('[data-action="filter"][id="dev-table-filter"]').filterTable();
    });
});
</script>

<script>
$(document).ready(function() {
    function getProducts() {

        var sPath = '';
        var aInputs = $('li').find('.get_manufacturer');
        var aKeys = Array();
        var aValues = Array();

        iKey = 0;

        $.each(aInputs, function(key, oInput) {
            if (oInput.checked) {
                aKeys[iKey] = oInput.value;
            }
            iKey++;
        });

        if (aKeys.length > 0) {
            var sPath = '';

            for (var i = 0; i < aKeys.length; i++) {
                sPath = sPath + 'man[]=' + aKeys[i] + '&';
            }
        }

        var aInputs = Array();
        var aInputs = $('li').find('.get_p_cat');
        var aKeys = Array();
        var aValues = Array();

        iKey = 0;

        $.each(aInputs, function(key, oInput) {
            if (oInput.checked) {
                aKeys[iKey] = oInput.value;
            }
            iKey++;
        });

        if (aKeys.length > 0) {
            var sPath = '';

            for (var i = 0; i < aKeys.length; i++) {
                sPath = sPath + 'p_cat[]=' + aKeys[i] + '&';
            }
        }

        var aInputs = Array();
        var aInputs = $('li').find('.get_cat');
        var aKeys = Array();
        var aValues = Array();

        iKey = 0;

        $.each(aInputs, function(key, oInput) {
            if (oInput.checked) {
                aKeys[iKey] = oInput.value;
            }
            iKey++;
        });

        if (aKeys.length > 0) {
            var sPath = '';

            for (var i = 0; i < aKeys.length; i++) {
                sPath = sPath + 'cat[]=' + aKeys[i] + '&';
            }
        }

        $('#wait').html('<img src="images/load.gif"');

        $.ajax({
            url: "load.php",
            method: "POST",

            data: sPath + 'saction=getProducts',

            success: function(data) {

                $('#products').html('');
                $('#products').html(data);
                $('#wait').empty();
            }
        });

        $.ajax({
            url: "load.php",
            method: "POST",

            data: sPath + 'saction=getPaginator',

            success: function(data) {

                $('.pagination').html('');
                $('.pagination').html(data);
            }
        });
    }

    $('.get_manufacturer').click(function() {
        getProducts();
    });

    $('.get_p_cat').click(function() {
        getProducts();
    });
    $('.get_cat').click(function() {
        getProducts();
    });
});
</script>
</body>

</html>
</body>