<?php 
class LogsHelper {
	public function Add($userId, $text){
		APP::import('Model', 'Log');
		$this->Log = new Log();
		$this->Log->create();
		$this->Log->set('user_id', $userId);
		$this->Log->set('message', $text);
		$this->Log->save();
	}
}
?>