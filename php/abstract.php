<?php
abstract class telecom{
	
	abstract public function telecomfun();
}

class telecomClass extends telecom{
	
	public function __construct(){
		
		echo "I am Here";
	}
	
	public function telecomfun(){
		echo " Sagar ";
		echo "telecomfun demo";
	}
}

$obj = new telecomClass();
$obj->telecomfun();
?>