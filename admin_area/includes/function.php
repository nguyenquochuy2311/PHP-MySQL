<?php

$database = mysqli_connect("localhost", "root", "", "myweb");

function getManu()
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

    $per_page = 6;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $start_from = ($page - 1) * $per_page;
    $sLimit = " order by 1 DESC LIMIT $start_from,$per_page";
    $sWhere = (count($aWhere) > 0 ? ' WHERE ' . implode(' or ', $aWhere) : '') . $sLimit;

    $get_manu = "select * from manufacturers " . $sWhere;
    $run_manu = mysqli_query($database, $get_manu);

    $i = 0;

    while ($row_manu = mysqli_fetch_array($run_manu)) {

        $manu_id = $row_manu['manufacturer_id'];

        $manu_title = $row_manu['manufacturer_title'];

        $manu_img = $row_manu['manufacturer_image'];

        $manu_top = $row_manu['manufacturer_top'];

        $i++;

        echo "
        
        <tr>
            <td> <?php echo $i; ?> </td>
            <td> <?php echo $manu_title; ?> </td>
            <td> <img src='other_images/<?php echo $manu_img; ?>' width='60' height='60'></td>
            <td> <?php echo $manu_top; ?> </td>
            <td>
                <a href='index.php?delete_manufacturer=<?php echo $manu_id; ?>'>
                    <i class='fa fa-trash-o'></i> Xoá
                </a>
            </td>
            <td>
                <a href='index.php?edit_manufacturer=<?php echo $manu_id; ?>'>
                    <i class='fa fa-pencil'></i> Sửa
                </a>
            </td>
        </tr>
        
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

    $sWhere = (count($aWhere) > 0 ? ' WHERE ' . implode(' or ', $aWhere) : '');
    $query = "select * from manufacturers " . $sWhere;
    $result = mysqli_query($database, $query);
    $total_records = mysqli_num_rows($result);
    $total_pages = ceil($total_records / $per_page);

    echo "<li> <a href='view_manufacturers.php?page=1";
    if (!empty($aPath)) {
        echo "&" . $aPath;
    }

    echo "'>" . 'Trang đầu' . "</a></li>";

    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<li> <a href='view_manufacturers.php?page=" . $i . (!empty($aPath) ? '&' . $aPath : '') . "'>" . $i . "</a></li>";
    }

    echo "<li> <a href='view_manufacturers.php?page=$total_pages'";

    if (!empty($aPath)) {
        echo "&" . $aPath;
    }
    echo "'>" . 'Trang cuối' . "</a></li>";
}

?>