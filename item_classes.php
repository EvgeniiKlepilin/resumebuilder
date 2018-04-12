<?php

class Item{
	
	public $title = "";
	public $description = "";
	public $startDate = "";
	public $endDate = "";
	
	function __construct($title, $description, $startDate, $endDate){
		$this->title = $title;
		$this->description = $description;
		if($startDate != "" && $endDate != ""){
			$this->startDate = $startDate;
			$this->endDate = $endDate;
		} else if($startDate != ""){
			$this->startDate = $startDate;
			$this->endDate = "Now";
		}		
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
		if($startDate != "" && $endDate != ""){
			$this->startDate = $startDate;
			$this->endDate = $endDate;
		} else if($startDate != ""){
			$this->startDate = $startDate;
			$this->endDate = "Now";
		}		
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
	
}

class Skillset extends Item{
	
	protected $skillsList = array();
	
	function __construct($title, $description, $startDate, $endDate, $skillsList){
		$this->title = $title;
		if($description != ""){ //optional description for skillset
			$this->description = $description;
		}
		if($startDate != "" && $endDate != ""){
			$this->startDate = $startDate;
			$this->endDate = $endDate;
		} else if($startDate != ""){
			$this->startDate = $startDate;
			$this->endDate = "Now";
		}		
		$this->skillsList = $skillsList;
	}
	
	function printItem(){
		parent::printItem();
		echo "<h2>Skills:</h2>";
		echo "<ul>";
		for($i = 0; $i < count($referenceList); $i++){
			echo "<li>" . $referenceList[$i] . "</li>";
		}
		echo "</ul>";
	}
}

?>