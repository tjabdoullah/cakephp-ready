<?php 
class AnnexesHelper {
	function NewAnnex() {
		APP::import('Model', 'Annex');
		$this->Annex = new Annex();
		$this->Annex->create();
		$this->Annex->save();
		return $this->Annex->getLastInsertID();
	}
}
?>