<?php


function insert_mongo($table,$data)
{
    global $db;    
    $res = $db->$table->insert($data);
    return $res;
}

function update_mongo($table,$data,$condition)
{
    global $db;
    $res = $db->$table->update($condition,array('$set'=>$data),array("multiple" => true));
    return $res;
}

function delete_mongo($table,$condition)
{
    global $db;
    $res = $db->$table->remove($condition);
    return $res;
}

function select_mongo($table,$condition,$params=array())
{
    global $db;
    $db->$table->find($condition,$params);
    return $res;
}

function select_all_mongo($table)
{
    global $db;
    $condition = array();
    $res = $db->$table->find($condition);
    return $res;
}

function count_mongo($table,$condition=array())
{
    global $db;
    $res = $db->$table->count($condition);
    return $res;
}

function select_limit_mongo($table,$condition,$params=array(),$index,$nrecords)
{
    global $db;
    $com_data = get_company_data();
    $res = $db->$table->find($condition,$params)->limit($nrecords)->skip($index);
    return $res;
}

function mongo_time()
{
	date_default_timezone_set("UTC"); 
	$created_at = new MongoDate(time());
	return $created_at;
}

?>
