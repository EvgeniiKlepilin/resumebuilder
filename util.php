<?php
	function arrayToCommaString($array){
		$string = "";
		for($i = 0; $i < count($array); $i++){
			if($i == (count($array) - 1)){
				$string .= $array[$i];
			} else {
				$string .= $array[$i] . ",";
			}
		}
		
		return $string;
	}
?>