<?php

require "util.php";

class Header{
	
	public $title = "";
	public $address = "";
	public $phone = "";
	public $email = "";
	protected $links = array();

	function __construct($title, $address, $phone, $email, $links){
		$this->title = $title;
		$this->email = $email;
		if(!empty($address)){ //optional
			$this->address = $address;
		}
		if(!empty($phone)){ //optional
			$this->phone = $phone;
		}
		if(!empty($links)){ //optional
			$this->links = $links;
		}
	}
	
	function printHeader(){
		echo "<h1>" . $this->title . "</h1>";
		echo "<p>Email: " . $this->email . "</p>";
		if(!empty($this->address)){
			echo "<p>Address: " . $this->address . "</p>";
		}
		if(!empty($this->phone)){
			echo "<p>Phone: " . $this->phone . "</p>";
		}
		if(!empty($this->links)){
			echo "<p>Links:</p><ul>";
			for($i = 0; $i < count($this->links); $i++){
				echo "<li>" . $this->links[$i] . "</li>";
			}
			echo "</ul>";
		}		
	}
}

class Item{
	
	public $title = "";
	public $description = "";
	public $startDate = "";
	public $endDate = "";
	
	function __construct($title, $description, $startDate, $endDate){
		$this->title = $title;
		$this->description = $description;
		if(!empty($startDate) && !empty($endDate)){
			$this->startDate = $startDate;
			$this->endDate = $endDate;
		} else if(!empty($startDate)){
			$this->startDate = $startDate;
			$this->endDate = "Now";
		}		
	}

	function printItem(){
		echo "<h2>" . $this->title . "</h2>";
		if(!empty($startDate)){
			echo "<h4>" . $this->startDate . " - " . $this->endDate . "</h4>";
		}		
		echo "<p>" . $this->description . "</p>";
	}

}

class Experience extends Item{
	
	protected $referenceList = array();
	
	function __construct($title, $description, $startDate, $endDate, $referenceList){
		$this->title = $title;
		$this->description = $description;
		if(!empty($startDate) && !empty($endDate)){
			$this->startDate = $startDate;
			$this->endDate = $endDate;
		} else if(!empty($startDate)){
			$this->startDate = $startDate;
			$this->endDate = "Now";
		}
		if(!empty($referenceList)){
			$this->referenceList = $referenceList;
		}		
	}
	
	function printItem(){
		parent::printItem();
		if(!empty($this->referenceList)){
			echo "<h3>References:</h3>";
		echo "<ul>";
		for($i = 0; $i < count($this->referenceList); $i++){
			echo "<li>" . $this->referenceList[$i] . "</li>";
		}
		echo "</ul>";
		}		
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
		if(!empty($startDate) && !empty($endDate)){
			$this->startDate = $startDate;
			$this->endDate = $endDate;
		} else if(!empty($startDate)){
			$this->startDate = $startDate;
			$this->endDate = "Now";
		}		
		$this->skillsList = $skillsList;
	}
	
	function printItem(){
		parent::printItem();
		echo "<h3>Skills:</h3>";
		echo "<ul>";
		for($i = 0; $i < count($this->referenceList); $i++){
			echo "<li>" . $this->referenceList[$i] . "</li>";
		}
		echo "</ul>";
	}
}

class PageManager{
	private $stylesheet = "";
	private $charset = "";
	private $description = "";
	private $author = "";
	private $keywords = array();
	public $title = "";
	
	function __construct($title, $stylesheet, $charset, $description, $author, $keywords){
		$this->title = $title;
		$this->stylesheet = $stylesheet;
		$this->charset = $charset;
		$this->description = $description;
		$this->author = $author;
		$this->keywords = $keywords;
	} 
	
	function startPage(){
		echo "<html><head>";
		if(!empty($this->title)){
			echo "<title>" . $this->title . "</title>";
		}
		if(!empty($this->stylesheet)){
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->stylesheet . "\">";
		}
		if(!empty($this->charset)){
			echo "<meta charset=\"" . $this->charset . "\">";
		}
		if(!empty($this->description)){
			echo "<meta name=\"description\" content=\"" . $this->description . "\">";
		}
		if(!empty($this->author)){
			echo "<meta name=\"author\" content=\"" . $this->author . "\">";
		}
		if(!empty($this->keywords)){
			echo "<meta name=\"keywords\" content=\"" . arrayToCommaString($this->keywords) . "\">";
		}
		echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
		echo "</head><body>";
	}
	
	function endPage(){
		echo "</body></html>";
	}
	
}

?>