<?php
App::uses('AppController', 'Controller');

class LoginController extends AppController {
	function beforeFilter(){
		parent::beforeFilter();
		$this->layout = 'login-default';
	}
	public function index() {
		
	}
	public function authenticate() {
			// Includes
			Controller::loadModel('User');
			$strings = new Strings();
			
			// Get the user
			$user = $this->User->findByEmail($this->request->data['login']);
			// Check if the user exists
			if (count($user) < 1) {
				$this->Session->setFlash(__('Le login que vous avez saisi n\'existe pas.'), 'custom-flash');
				$this->redirect('/login/index');
				return;
			}
			if (Strings::Encript($this->request->data['password']) != $user['User']['password']) {
				$this->Session->setFlash(__('Votre mot de passe est incorrecte.'), 'custom-flash');
				$this->redirect('/login/index');
				return;
			}
			
			$this->Session->write('User.id', $user['User']['id']);
			$this->Session->write('User.role', $user['User']['role']);
			$this->redirect(array('controller' => 'main', 'action' => 'index'));
	}
}
