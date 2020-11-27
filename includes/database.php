<?php

$conn = mysqli_connect("localhost", "root", "", "myweb");
if (!$conn) {
    die("không nết nối được vào MySQL server");
    exit();
}