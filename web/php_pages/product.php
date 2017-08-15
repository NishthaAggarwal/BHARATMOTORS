<?php
include '../module/function.php';
include '../global.php';

$data = get_product();
echo json_encode($data);
?>