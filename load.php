<?php

session_start();
include("includes/database.php");
include("functions/functions.php");

switch ($_REQUEST['saction']) {
    default:
        getProducts();
        break;
    case 'getPaginator';
        getPaginator();
        break;
}