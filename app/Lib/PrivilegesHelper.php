<?php 
class PrivilegesHelper {
	public function Check($allowedRoles){
		$userId = $this->Session->read('User.id');
		$userRole = $this->Session->read('User.role');
		if(in_array($userRole, $allowedRoles)){
			//$this->Session->setFlash('Welcome','custom-flash');
		}
		else{
			//$this->Session->setFlash('You don\'t belong here !','custom-flash');
			$this->redirect(array('controller' => 'login', 'action' => 'index'));
		}
	}
	
	public function CheckTrueFalse($allowedRoles){
		$userId = $this->Session->read('User.id');
		$userRole = $this->Session->read('User.role');
		if(in_array($userRole, $allowedRoles)){
			return true;
			//$this->Session->setFlash('Welcome','custom-flash');
		}
		else{
			//$this->Session->setFlash('You don\'t belong here !','custom-flash');
			//$this->redirect(array('controller' => 'login', 'action' => 'index'));
			return false;
		}
	}
}
?>