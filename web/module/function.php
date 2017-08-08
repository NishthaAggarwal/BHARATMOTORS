<?php
include '../include/dbfunction.php';

function add_product($data)
{ 
    //$data['_id']=new MongoId();
    $data['creation_date']=new MongoDate();
    $count=count_mongo('product',array());
    $result = array_merge(array('product_id' => $count + 1), $data);
    $success=insert_mongo('product',$result);

    if($success['n']=='0')
    {

        return array('data'=>'Product inserted successfully','error_code'=>'100','success'=>'true');  
    }
    else
    {

        return array('data'=>'product not inserted','error_code'=>'102','success'=>'false');  
    }
}


function get_product()
{
    $all_data = array();
    $cursor=select_mongo('product',array(),array());
    foreach ($cursor as $doc) {
    array_push($all_data, $doc);
    }
     return array("success" => "true", "data" => $all_data, "error_code" => "100");
}

function get_count_product()
{
    $res=count_mongo('product',array());
    pr($res);
     return array("success" => "true", "data" => $res, "error_code" => "100");
    // if($success['n']=='0')
    // {
    //     //$id=$data['_id']->{$data['product_id']};

    //     return array('data'=>'Data is present','error_code'=>'100','success'=>'true');  
    // }
    // else
    // {

    //     return array('data'=>'data not present','error_code'=>'102','success'=>'false');  
    // }
}
?>
