<?php

class editview{
	public function gethtml(){
		$car= new carmodel($_REQUEST["guid"]);
		$content.=html::link('index.php','backtolist');
		$fields[]= array("type"=>"text","name"=>"model","id"=>"model","value"=>$car->getmodel());
		$fields[]= array("type"=>"text","name"=>"make","id"=>"make","value"=>$car->getmake());
		$fields[]= array("type"=>"number","name"=>"year","id"=>"year","value"=>$car->getyear());
		$content.=html::form('index.php?controller=editcontroller','post',$fields);
		$deletebutton[] = array( "type"=>"submit")
		$content.=html::form('index.php?controller=editcontroller','delete',$fields);
		return $content ;
	}
	
}
?>