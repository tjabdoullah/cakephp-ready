<?php 
class IdHelper {
	public function GetModelById($model, $id){
		try {
			APP::import('Model', $model);
			$this->$model = new $model();
			$this->$model->recursive = -1;
			$daModel = $this->$model->findById($id);
			if (!$daModel) throw new NotFoundException(__('Invalid model'));
			return $daModel;
		} catch (Exception $e) {
			return null;
		}
	}
	public function GetModelWithDetailsById($model, $id){
		try {
			APP::import('Model', $model);
			$this->$model = new $model();
			$daModel = $this->$model->findById($id);
			if (!$daModel) throw new NotFoundException(__('Invalid model'));
			return $daModel;
		} catch (Exception $e) {
			return null;
		}
	}
	public function PrintModelFieldById($model, $field, $id){
		try {
			APP::import('Model', $model);
			$this->$model = new $model();
			$this->$model->recursive = -1;
			$daModel = $this->$model->findById($id);
			if (!$daModel) throw new NotFoundException(__('Invalid model'));
			echo $daModel[$model][$field];
		} catch (Exception $e) {
			echo '-';
		}
	}
	public function GetModelFieldById($model, $field, $id){
		try {
			APP::import('Model', $model);
			$this->$model = new $model();
			$this->$model->recursive = -1;
			$daModel = $this->$model->findById($id);
			if (!$daModel) throw new NotFoundException(__('Invalid model'));
			return $daModel[$model][$field];
		} catch (Exception $e) {
			return '-';
		}
	}
}
?>