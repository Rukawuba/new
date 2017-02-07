<?php
class carmodel extends model{
	
	protected $model;
	protected $make;
	protected $year;
	
	public function setMake($make) {
		$this->make = $make ;
	
	}
	public function getMake() {
		
		return $this->make ;
		
	}
	public function setModel($model) {
		$this->model = $model ;
	
	}
	public function getModel() {
		
		return $this->model ;
		
	}
	public function setYear($year) {
		$this->year = $year ;
	
	}
	public function getYear() {
		
		return $this->year ;
		
	}
}



?>