<?php
$active = 'Cửa hàng';
include("includes/header.php");

?>

<?php
if (isset($_GET['p_cat'])) {
    $p_cat_id = $_GET['p_cat'];

    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    $run_p_cat = mysqli_query($conn, $get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);

    $p_cat_id = $row_p_cat['p_cat_id'];
    $p_cat_title = $row_p_cat['p_cat_title'];
    $p_cat_image = $row_p_cat['p_cat_image'];
}
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
                <?php

                if (isset($_GET['p_cat'])) {
                    echo "
                    
                    <li>
                    
                        $p_cat_title
                    
                    </li>
                    
                    ";
                }

                ?>
            </ul>
        </div>

        <div class="col-md-3">
            <?php
            include("includes/sidebar.php");
            ?>
        </div>

        <div class="col-md-9">

            <div class="box">
                <h1>Cửa hàng</h1>
            </div>

            <div id="products" class="row">
                <?php

                if (isset($_GET['p_cat'])) {
                    getProducts_Cat($p_cat_id);
                } else {
                    getProducts();
                }

                ?>
            </div>

            <center>
                <ul class="pagination">
                    <?php getPaginator(); ?>
                </ul>
            </center>

        </div>

        <div src="images/load.gif" id="wait" class="wait" style="position:absolute;top:40%;left:45%;padding: 200px 100px 100px 100px;">
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