<?php
App::uses('AppController', 'Controller');
/**
 * Annexes Controller
 *
 * @property Annex $Annex
 * @property PaginatorComponent $Paginator
 */
class AnnexesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Annex->recursive = 0;
		$this->set('annexes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Annex->exists($id)) {
			throw new NotFoundException(__('Invalid annex'));
		}
		$options = array('conditions' => array('Annex.' . $this->Annex->primaryKey => $id));
		$this->set('annex', $this->Annex->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Annex->create();
			if ($this->Annex->save($this->request->data)) {
				$this->Session->setFlash(__('The annex has been saved.'), 'simple-flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annex could not be saved. Please, try again.'), 'error-flash');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Annex->exists($id)) {
			throw new NotFoundException(__('Invalid annex'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Annex->save($this->request->data)) {
				$this->Session->setFlash(__('The annex has been saved.'), 'simple-flash');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annex could not be saved. Please, try again.'), 'error-flash');
			}
		} else {
			$options = array('conditions' => array('Annex.' . $this->Annex->primaryKey => $id));
			$this->request->data = $this->Annex->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Annex->id = $id;
		if (!$this->Annex->exists()) {
			throw new NotFoundException(__('Invalid annex'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Annex->delete()) {
			$this->Session->setFlash(__('The annex has been deleted.'), 'simple-flash');
		} else {
			$this->Session->setFlash(__('The annex could not be deleted. Please, try again.'), 'error-flash');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
