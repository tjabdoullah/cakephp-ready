<?php 
class MenuHelper {
	public function GetModelValueCount(){
		APP::import('Model', 'Scholar');
		$this->Scholar = new Scholar();
		$this->Scholar->recursive = -1;
		$count = $this->Scholar->find('count', array('conditions' => array('Scholar.scholar_situation =' => '0')));
		if ($count == 0) return "";
		return "<span class='badge badge-danger'>" . $count . "</span>";
	}
}
?>