<?php
class Mailing {
	public function SimpleMail($to, $topic, $message){
		try {
			App::uses('CakeEmail', 'Network/Email');
			$Email = new CakeEmail('gmail');
			$Email->from(array('no-reply@fme.ma' => 'Fondation Marocaine de l\'Etudiant'));
			$Email->to($to);
			$Email->subject($topic);
			$Email->send($message);
		} catch (Exception $e) {
			
		}
	}
	public function SimpleMailWithNames($to, $gender, $fname, $lname, $topic, $message){
		try {
			App::uses('CakeEmail', 'Network/Email');
			$Email = new CakeEmail('gmail');
			$Email->viewVars(array(
				'gender' => $gender, 
				'fname' => $fname, 
				'lname' => $lname,
				'message' => $message)
			);
			$Email->template('common');
			$Email->emailFormat('html');
			$Email->from(array('no-reply@fme.ma' => 'Fondation Marocaine de l\'Etudiant'));
			$Email->to($to);
			$Email->subject($topic);
			$Email->send();
		} catch (Exception $e) {
			
		}
	}
}
?>