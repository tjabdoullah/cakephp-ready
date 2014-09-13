<?php 
class UsersHelper {
	public function Add($fname, $lname, $email, $role, $gender, $photoName){
		// Includes 
		App::import('Lib', 'Strings');
		App::import('Lib', 'Mailing');
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
		$strings = new Strings();

		// Check if the username already exists
		$user = $this->User->findByEmail($email);
		if (count($user) > 0) {
			$this->Session->setFlash(__('L\'E-mail que vous avez saisi est déjà utilisé.'), 'custom-flash-danger');
			$this->redirect(array('action' => 'index'));
			return;
		}

		$password = $strings->generateRandomString();
		$encrypted_password = $strings->Encript($password);

		// Create user
		$this->User->create();
		$this->User->set('fname', $fname);
		$this->User->set('lname', $lname);
		$this->User->set('password', $encrypted_password);
		$this->User->set('email', $email);
		$this->User->set('role', $role);
		$this->User->set('gender_id', $gender);
		$this->User->save();

		// Save user's icon
		$ext = end(explode(".", $photoName));
		$file = new File('files/uploads/' . $photoName);
		if ($file->exists()) {
		    $dir = new Folder('files/users-avatars/users', true);
		    $file->copy($dir->path . DS . $strings->fromEmailToString($email) . "." . $ext);
		}

		// Send E-mail
		$mailer = new Mailing();
		$mailer->UserAccountCreation(
			$email,
			'',
			$fname,
			$lname,
			$email,
			$password,
			$role);

		//$this->Session->setFlash(__('L\'utilisateur vient d\'être ajouté avec succès'), 'custom-flash');
		//$this->redirect(/*array('action' => 'index')*/$this->referer());
	}

	public function addV2($fname, $lname, $email, $role, $gender){

		APP::import('Model', 'User');
		$this->User = new User();

		// Includes 
		App::import('Lib', 'Strings');
		App::import('Lib', 'Mailing');
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
		$strings = new Strings();

		// Check if the username already exists
		$user = $this->User->findByEmail($email);
		if (count($user) > 0) {
			$this->Session->setFlash(__('L\'E-mail que vous avez saisi est déjà utilisé.'), 'custom-flash-danger');
			$this->redirect($this->referer());
			return;
		}

		$password = $strings->generateRandomString();
		$encrypted_password = $strings->Encript($password);

		// Create user
		$this->User->create();
		$this->User->set('fname', $fname);
		$this->User->set('lname', $lname);
		$this->User->set('password', $encrypted_password);
		$this->User->set('email', $email);
		$this->User->set('role_id', $role);
		$this->User->set('gender_id', $gender);
		$this->User->save();

		// Send E-mail
		$mailer = new Mailing();
		$mailer->UserAccountCreation(
			$email,
			'',
			$fname,
			$lname,
			$email,
			$password,
			$role);
		
		return $this->User->getLastInsertID();
	}

	public function addV3($fname, $lname, $email, $role, $gender){

		APP::import('Model', 'User');
		$this->User = new User();

		// Includes 
		App::import('Lib', 'Strings');
		App::import('Lib', 'Mailing');
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
		$strings = new Strings();

		// Check if the username already exists
		$user = $this->User->findByEmail($email);
		if (count($user) > 0) {
			$this->Session->setFlash(__('L\'E-mail que vous avez saisi est déjà utilisé.'), 'custom-flash-danger-go-back');
			$this->redirect($this->referer());
			return;
		}

		$password = $strings->generateRandomString();
		$encrypted_password = $strings->Encript($password);

		// Create user
		$this->User->create();
		$this->User->set('fname', $fname);
		$this->User->set('lname', $lname);
		$this->User->set('password', $encrypted_password);
		$this->User->set('email', $email);
		$this->User->set('role_id', $role);
		$this->User->set('gender_id', $gender);
		$this->User->save();

		// Send E-mail
		/*$mailer = new Mailing();
		$mailer->UserAccountCreation(
			$email,
			'',
			$fname,
			$lname,
			$email,
			$password,
			$role);*/
		
		return $this->User->getLastInsertID();
	}

	public function addV4($fname, $lname, $email, $role, $gender, $password){

		APP::import('Model', 'User');
		$this->User = new User();

		// Includes 
		App::import('Lib', 'Strings');
		App::import('Lib', 'Mailing');
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
		$strings = new Strings();

		// Check if the username already exists
		$user = $this->User->findByEmail($email);
		if (count($user) > 0) {
			$this->Session->setFlash(__('L\'E-mail que vous avez saisi est déjà utilisé.'), 'custom-flash-danger-go-back');
			$this->redirect($this->referer());
			return;
		}

		$encrypted_password = $strings->Encript($password);

		// Create user
		$this->User->create();
		$this->User->set('fname', $fname);
		$this->User->set('lname', $lname);
		$this->User->set('password', $encrypted_password);
		$this->User->set('email', $email);
		$this->User->set('role_id', $role);
		$this->User->set('gender_id', $gender);
		$this->User->save();

		// Send E-mail
		$mailer = new Mailing();
		$mailer->UserAccountCreation(
			$email,
			'',
			$fname,
			$lname,
			$email,
			$password,
			$role);
		
		return $this->User->getLastInsertID();
	}

	public function addV5($fname, $lname, $email, $role, $gender, $picture_data){

		APP::import('Model', 'User');
		$this->User = new User();

		// Includes 
		App::import('Lib', 'Strings');
		App::import('Lib', 'Mailing');
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
		$strings = new Strings();

		// Check if the username already exists
		$user = $this->User->findByEmail($email);
		if (count($user) > 0) {
			$this->Session->setFlash(__('L\'E-mail que vous avez saisi est déjà utilisé.'), 'custom-flash-danger-go-back');
			$this->redirect($this->referer());
			return;
		}
		
		$password = $strings->generateRandomString();
		$encrypted_password = $strings->Encript($password);

		// Da Picture
		$picture_id = DocumentsHelper::Add('Institution Logo', 'files', $picture_data);

		// Create user
		$this->User->create();
		$this->User->set('fname', $fname);
		$this->User->set('lname', $lname);
		$this->User->set('password', $encrypted_password);
		$this->User->set('email', $email);
		$this->User->set('role_id', $role);
		$this->User->set('gender_id', $gender);
		$this->User->set('photo_id', $picture_id);
		$this->User->save();

		// Send E-mail
		$mailer = new Mailing();
		$mailer->UserAccountCreation(
			$email,
			'',
			$fname,
			$lname,
			$email,
			$password,
			$role);
		
		return $this->User->getLastInsertID();
	}

	public function addV6($fname, $lname, $email, $role, $gender, $password){

		APP::import('Model', 'User');
		$this->User = new User();

		// Includes 
		App::import('Lib', 'Strings');
		App::import('Lib', 'Mailing');
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		
		$strings = new Strings();

		// Check if the username already exists
		$user = $this->User->findByEmail($email);
		if (count($user) > 0) {
			$this->Session->setFlash(__('Prière de vous authentifier afin de continuer votre candidature.'), 'custom-flash-danger-go-back');
			$this->redirect(array('controller' => 'login', 'action' => 'login'));
			return;
		}

		$encrypted_password = $strings->Encript($password);

		// Create user
		$this->User->create();
		$this->User->set('fname', $fname);
		$this->User->set('lname', $lname);
		$this->User->set('password', $encrypted_password);
		$this->User->set('email', $email);
		$this->User->set('role_id', $role);
		$this->User->set('gender_id', $gender);
		$this->User->save();

		// Send E-mail
		$mailer = new Mailing();
		$mailer->UserAccountCreation(
			$email,
			'',
			$fname,
			$lname,
			$email,
			$password,
			$role);
		
		return $this->User->getLastInsertID();
	}

	public function Edit($id, $fname, $lname, $role, $gender, $photoName){
		App::import('Lib', 'Strings');
		$strings = new Strings();
		
		$user = $this->User->findById($id);
		if (!$user) throw new NotFoundException(__('Invalid user'));
		$this->User->id = $id;

		// Basic information
		$this->User->set("role", $role);
		$this->User->set("gender_id", $gender);
		$this->User->set("fname", $fname);
		$this->User->set("lname", $lname);
		$this->User->save();

		// icon
		if ($photoName != "") {
			App::uses('Folder', 'Utility');
			App::uses('File', 'Utility');
			$ext = end(explode(".", $photoName));
			$file = new File('files/uploads/' . $photoName);
			if ($file->exists()) {
			    $dir = new Folder('files/users-avatars/users', true);
			    $file->copy($dir->path . DS . $strings->fromEmailToString($user['User']['email']) . "." . $ext);
			}
		}

		$this->User->id = null; 
		$user = $this->User->findById($id);
		$this->set('user', $user);
		$this->Session->setFlash(__('L\'utilisateur vient d\'être modifié avec succès'), 'custom-flash');
	}

	public function Delete($id){
		$user = $this->User->findById($id);
		if (!$user) throw new NotFoundException(__('Invalid user'));
		$this->User->id = $id;
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('l\'utilisateur <strong>' . $user['User']['fname'] . ' ' . $user['User']['lname'] . '</strong> vient d\'être supprimé.'), 'custom-flash');
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function EditPassword($id, $password){
		App::import('Lib', 'Strings');
		$user = $this->User->findById($id);
		if (!$user) throw new NotFoundException(__('Invalid user'));
		$this->User->id = $id;
		$this->User->set("password", Strings::Encript($password));
		$this->User->save();
		$this->Session->setFlash(__('Le mot de passe a été mis à jour.'), 'custom-flash');
		//$this->redirect(array('action' => 'edit', $id));
	}

	public function GetUserNamesById($id){
		try {
			App::import('Model', 'User');
			$this->User = new User();
			$this->User->recursive = -1;
			$user = $this->User->findById($id);
			if (!$user) throw new NotFoundException(__('Invalid user'));
			return strtoupper($user['User']['lname']) . ' ' . ucfirst(strtolower($user['User']['fname']));
		} catch (Exception $e) {
			return "";
		}
	}

	public function GetUserImage($userId){
		try {
			App::uses('Folder', 'Utility');
			$dir = new Folder('files' . DS . 'users' . DS . $userId);
			$photos = $dir->find('photo.*');
			if (count($photos) == 0)
				return $this->webroot . 'img' . '/' . 'profile.png';
			$path = $this->webroot . 'files' . '/' . 'users' . '/' . $userId  . '/' . $photos[0];
			return $path;
		} catch (Exception $e) {
			return $this->webroot . 'img' . '/' . 'profile.png';
		}
	}
}
?>