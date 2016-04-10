<?php
interface book {
	
	const SAGAR = 30;
	
	public function getBook($test);
}

interface papperBook {	
	
	public function getBook($test);
}

class bookNote implements book, papperBook{
	
		
		public function __construct(){
			
			echo "sagar";
			
			echo SELF::SAGAR;
		}
		
		public function getBook($test){
			
			echo "In getBook $test";
		}
} 

$obj = new bookNote();
$obj->getBook(bookNote::SAGAR);
?>