<?php
$update_response = file_get_contents("php://input");
$fpW = fopen('webhookNew.txt', "a+");	
	fwrite($fpW, $update_response);	
	fclose($fpW);

$update = json_decode($update_response, true);

$fpW = fopen('webhookArray.txt', "a+");	
	fwrite($fpW, $update);	
	fclose($fpW);

if (isset($update["result"]["action"])) {
    $fp = fopen('sagar.txt', "a+");
	
	fwrite($fp, $update["result"]["action"]);
	
	fclose($fp);
}

?>