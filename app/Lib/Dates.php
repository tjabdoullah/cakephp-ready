<?php 
class Dates {
	function getMonthFromDate($date){
		$date = new DateTime($date);
		return Strings::MonthsTraductor($date->format('F'));
	}
	function DisplayDateInFrench($date){
		$date = new DateTime($date);
		return $date->format('d/m/Y');
	}
}
?>