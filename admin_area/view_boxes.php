<?php

if (!isset($_SESSION['admin_email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Xem Boxes
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags fa-fw"></i> Xem Boxes
                </h3>
            </div>

            <div class="panel-body">

                <?php

                    $get_boxes = "select * from boxes_section";

                    $run_boxes = mysqli_query($conn, $get_boxes);

                    while ($run_boxes_section = mysqli_fetch_array($run_boxes)) {

                        $box_id = $run_boxes_section['box_id'];

                        $box_title = $run_boxes_section['box_title'];

                        $box_desc = $run_boxes_section['box_desc'];

                    ?>

                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center">
                                <?php echo $box_title; ?>
                            </h3>
                        </div>

                        <div class="panel-body">
                            <?php echo $box_desc; ?>
                        </div>

                        <div class="panel-footer">
                            <center>
                                <a href="index.php?delete_box=<?php echo $box_id; ?>" class="pull-right">
                                    <i class="fa fa-trash"></i> Xoá
                                </a>

                                <a href="index.php?edit_box=<?php echo $box_id; ?>" class="pull-left">
                                    <i class="fa fa-pencil"></i> Sửa

                                </a>
                                <div class="clearfix"></div>

                            </center>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>
    </div>
</div>
</div>

<?php } ?>