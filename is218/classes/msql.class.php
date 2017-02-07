<?php
	public function 
	
	
	
	
	public function checkPasswod($passwod) {}
	
	class collection{
		
		public function create () {
			$obj = new model;
			return $obj;

			
			
		}
		
		public funtion getList(limit) {}
		
		public function getNext ($numItems) {}	
	
		public function getPrevious($numItems) {}
		
		
		
	}
	
	class usersCollection{
		private $pageRecordLimit;
		public function_construct($pageRecordLimit = 10) {
			$sql = 'SELECT * FROm cars LIMIT:RecordLimit';

			$dbconn = new DBconn;
			$stmt = $dbcon->pepare($sql);
			$stmt->bindParam(':RecordLimit', $pageRecordLimit);
			$this->cars =stmt->execute();
	}
	
	class main {
		/example how  to make a new car / new record
		
		$carCollection = new carCollection;
		
		$car= $carCollection->create();
		$ca->setMak($make);
		$car->setModel($model);
		$car-> save();
	}
	
	$program = new Main
?>