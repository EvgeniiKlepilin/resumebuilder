<?php

class Item{
	
	public $title = "";
	public $description = "";
	public $startDate = "";
	public $endDate = "";
	
	function __construct($title){
		$this->title = $title;
	}
	
	function __construct($title, $description){
		$this->title = $title;
		$this->description = $description;
	}
	
	function __construct($title, $description, $startDate){
		$this->title = $title;
		$this->description = $description;
		$this->startDate = $startDate;
		$this->endDate = "Now";
	}
	
	function __construct($title, $description, $startDate, $endDate){
		$this->title = $title;
		$this->description = $description;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
	}

	function printItem(){
		echo "<h3>" . $title . "</h3>";
		if($startDate != ""){
			echo "<h2>" . $startDate . " - " . $endDate . "</h2>";
		}		
		echo "<p>" . $description . "</p>";
	}

}

class Experience extends Item{
	
	protected $referenceList = array();
	
	function __construct($title, $description, $startDate, $endDate, $referenceList){
		$this->title = $title;
		$this->description = $description;
		$this->startDate = $startDate;
		$this->endDate = $endDate;
		$this->referenceList = $referenceList;
	}
	
	function printItem(){
		parent::printItem();
		echo "<h2>References:</h2>";
		echo "<ul>";
		for($i = 0; $i < count($referenceList); $i++){
			echo "<li>" . $referenceList[$i] . "</li>";
		}
		echo "</ul>";
	}
}

class Education extends Item{
	
	function __construct($title){
		$this->title = $title;
	}
	
	function printItem(){
		echo "<p>" . $title . "</p>";
	}
}

?>