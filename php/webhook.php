<?php
$update_response = $_POST['payload'];
$fpW = fopen('webhookNew.txt', "a+");	
	fwrite($fpW, $update_response);	
	fclose($fpW);

$update = json_decode($update_response, true);

$fpW = fopen('webhookArray.txt', "a+");	
	fwrite($fpW, $update);	
	fclose($fpW);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $postdata = file_get_contents('php://input');
    $postdata = urldecode($postdata);

    $arraydata = explode("&",$postdata)[0];
    $arraydata = str_ireplace("payload=",'',$arraydata);

    $jsondata = json_decode($arraydata,true);

    //var_dump($jsondata);
    $gitref = $jsondata['ref'];


    //echo $gitref . PHP_EOL;

    $fp = fopen('sagar.txt', "a+");	
	fwrite($fp, $jsondata);
	fclose($fp);
}

?>