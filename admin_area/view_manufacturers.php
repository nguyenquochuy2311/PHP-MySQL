<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>


<?php

$aMan = array();

if (isset($_REQUEST['man']) && is_array($_REQUEST['man'])) {

    foreach ($_REQUEST['man'] as $sKey => $sVal) {

        if ((int)$sVal != 0) {

            $aMan[(int)$sVal] = (int)$sVal;
        }
    }
}

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Xem thông tin nhà sản xuất
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">

                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> Xem thông tin nhà sản xuất
                </h3>

            </div>


            <div class="panel-body">
                <div class="input-group">
                    <input size="50px" style="display:block;margin:auto;" class="form-control" id="dev-table-filter" data-filters="#dev-manufacturer"
                        data-action="filter" placeholder="Nhập thương hiệu">
                    <a class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> STT </th>
                                <th> Tên thương hiệu </th>
                                <th> Hình ảnh </th>
                                <th> Kiểm tra </th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                                getManu();

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <center>
        <ul class="pagination">
            <?php getPaginator(); ?>
        </ul>
    </center>
</div>

<?php } ?>

<script>
    $(document).ready(function() {
        function getManu() {

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
                url: "../load.php",
                method: "POST",

                data: sPath + 'saction=getPaginator',

                success: function(data) {

                    $('.pagination').html('');
                    $('.pagination').html(data);
                }
            });
        }

        $('.get_manufacturer').click(function() {
            getManu();
        });
    });
</script>