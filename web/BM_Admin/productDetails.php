<?php
include '../global.php';
include '../module/function.php';

$result=get_product();
$data=array();


foreach ($result['data'] as $value ) {
	$data[] = array(
 			'product_id'=>$value['product_id'],
 			'product_name'=>$value['product_name']
 			);
}

	echo json_encode($data);
?>
