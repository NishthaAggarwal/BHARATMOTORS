<?php
include '../module/function.php';
include '../global.php';

$result = get_selected_product();
$data=array();


foreach ($result['data'] as $value ) {
	$data[] = array(
 			'product_id'=>$value['product_id'],
 			'product_name'=>$value['product_name'],
 			'product_price'=>$value['product_price'],
 			'url'=>$value['url']
 			);
}

	echo json_encode($data);
?>