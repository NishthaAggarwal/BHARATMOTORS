<?php
$httpHost=explode(".",$_SERVER['HTTP_HOST']);
if(end($httpHost)=='com')
{
    $folder='';
    $server_path = $_SERVER["DOCUMENT_ROOT"]."/";
    $site_url = "https://$_SERVER[HTTP_HOST]/";
}else{
    $currentStructure=array_values(array_filter(explode("/",$_SERVER['PHP_SELF'])));
    $folder=$currentStructure[0];
    $server_path = dirname(__FILE__)."/";
    $site_url = "http://$_SERVER[HTTP_HOST]/$folder/";
    }

    $img_url = $site_url . "web/images";
    $css_url = $site_url . "web/css";
    $php_page_url = $site_url . "web/php_pages";
    $js_url = $site_url . "web/js";
    echo $img_url;


    function js_url()
    {
    	global $js_url;
    	return $js_url . "web/js/";
    }
?>