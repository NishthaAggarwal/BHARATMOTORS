<?php


// $data = json_decode(file_get_contents("php://input"));
// $product_name = $data->product_name;
// // $product_description = $data->product_description;
// // $product_price=$data->product_price;
// // $product_quantity=$data->product_quantity;

// // echo $product_name." ".$product_description." ".$product_quantity." ".$product_price;
// echo $product_name;
// echo "hi";
// $value=1;
// echo json_encode($value);

include '../global.php';
include '../module/function.php';
$data = json_decode(file_get_contents("php://input"));
// $result=get_product();
// $data=array();


// foreach ($result['data'] as $value ) {
// 	$data[] = array(
//  			'product_id'=>$value['product_id'],
//  			'product_name'=>$value['product_name']
//  			);
// }
echo $data->product_name;
$data_insert=array(
'product_name'=>$data->product_name,
'product_desc'=>$data->product_description,
'product_price'=>$data->product_price,
'product_quantity'=>$data->product_quantity
);


//  $data = array(
//   'product_name' => 'Bottle Jacks',
//   'product_desc' => 'We carefully select the packaging supplies to be used for wrapping the products hence, mitigating the risk of damage posed by loading/ unloading, shipping, and other external factors. Our products are the most sought after in the market, as they are specifically made as per global and domestic quality managements systems.',
//   'product_price' => '10',
//   'product_quantity' => '100');
//  $result = add_product($data);
// pr($result);
// $data = array(
//   'product_name' => 'Bottle Jacks'
//   );
// $result = get_product();
// pr($result);

add_product($data_insert);
	echo json_encode($data);
?>