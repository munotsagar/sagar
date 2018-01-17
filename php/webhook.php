<?php
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    $fp = fopen('sagar.txt', "a+");
	
	fwrite($fp, $update["result"]["action"]);
	
	fclose($fp);
}

?>