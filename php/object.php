<?php
	$car = new ford();
	echo 'Model';
	echo '  ' . $car->getModel() . '<br>';
	echo 'Doors';
	echo '  ' . $car->getDoors() . '<br>';
	echo 'Wheels';
	echo '  ' . $car->getWheels() . '<br>';
	echo 'Engine';
	echo '  ' . $car->getEngine() . '<br>';
	
	print_r($car);
	
	class car {
		private $doors;
		private $wheels;
		private $engine;
		public function __construct()
		{
			$this->doors = 2;
			$this->wheels = 4;
			$this->engine = 'v8';
		}
		
		public function setDoors($doors) {
			$this->doors = $doors;
			
		}
		
		public function getDoors() {
			return $this->doors;
			
		}
		
		public function setWheels($wheels) {
			$this->wheels = $wheels;
			
		}
		
		public function getWheels() {
			return $this->wheels;
			
		}
		public function setEngine($engine) {
			$this->engine = $engine;
			
		}
		
		public function getEngine() {
			return $this->engine;
			
		}
	}
	
	class ford extends car {
		public $model;
		
		public function __construct()
		{
			$this->model = 'Mustang';
		}
		
		public function setModel($model) {
			$this->model = $model;
			
		}
		
		public function getModel() {
			return $this->model;
			
		}
	}
?>