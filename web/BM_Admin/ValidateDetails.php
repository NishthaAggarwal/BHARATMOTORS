<?php
include '../global.php';
include '../module/function.php';

$data = json_decode(file_get_contents("php://input"));
$userName = $data->admin_name;
$userPwd = $data->admin_psw;
$value = 0;
$result = get_adminCredentials();
if((isset($userName) && ($userName == $result['data'][0]['adminName']))&&(isset($userPwd) && ($userPwd == $result['data'][0]['adminPwd']))){
	$value =1;
}
// Escaping special characters from submitting data & storing in new variables.
//$name = mysqli_real_escape_string($conn,$data->category_name);
echo json_encode($value);
?>