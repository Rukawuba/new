<?php
 class addcontroller (
 public function get(){
	 
	 $new = new addview();
	 echo $new->gethtml();
 }
 public function post(){
	 
	 $car = new carmodel();
	 
	 $car->setMake($_POST['make']);
	 $car->setModel($_POST['model']);
	 $car->setYear($_POST['year']);
 }
 
 
 
 
 )
 



?>