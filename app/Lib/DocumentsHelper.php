<?php 
class DocumentsHelper {
	function Add($name, $path, $fileData) {

		APP::import('Model', 'Document');
		$this->Document = new Document();

		$this->Document->create();
		$this->Document->set("path", $path);
		$this->Document->set("real_filename", $name);
		$this->Document->save();

		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$folder = new Folder();
		$documentsFolder = WWW_ROOT . DS . $path;
		$filename = $documentsFolder . DS . $fileData['name'];
		$extension = pathinfo($filename, PATHINFO_EXTENSION);
		move_uploaded_file($fileData['tmp_name'], $documentsFolder . DS . $this->Document->getLastInsertID() . '.' . $extension);

		$this->Document->id = $this->Document->getLastInsertID();
		$this->Document->set("filename", $this->Document->getLastInsertID() . '.' . $extension);
		$this->Document->save();

		return  $this->Document->getLastInsertID();
	}

	function GetDocumentPathById($id, $photo = false){
		try
		{
			if ($id == 0) {
				echo $this->webroot . 'img/profile.png';
				return;
			}
			APP::import('Model', 'Document');
			$this->Document = new Document();
			$this->Document->recursive = -1;
			$document = $this->Document->findById($id);
			echo $this->webroot . $document['Document']['path'] . '/' . $document['Document']['filename'];
		}catch (Exception $e) {
			if ($photo) {
				echo $this->webroot . 'img/profile.png';
			}
		}
	}

	function DeleteDocumentById($id, $path = 'path'){
		try
		{
			APP::import('Model', 'Document');
			$this->Document = new Document();
			$this->Document->recursive = -1;
			$document = $this->Document->findById($id);
			if (!$document){
				//unlink(WWW_ROOT . DS . $path . DS . $document['Document']['filename'];
				$this->Document->id = $id;
				$this->Document->delete();
			}
		}catch (Exception $e) {
			
		}
	}
}
?>