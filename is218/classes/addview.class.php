<?php
class addview{
	public function gethtml(){
		$content.=html::link('index.php','backtolist');
		$fields[]= array("type"=>"text","name"=>"model","id"=>"model");
		$fields[]= array("type"=>"text","name"=>"make","id"=>"make");
		$fields[]= array("type"=>"number","name"=>"year","id"=>"year");
		$content.=html::form('index.php?controller=addcontroller','post',$fields);
		
		
	}
	
}
?>