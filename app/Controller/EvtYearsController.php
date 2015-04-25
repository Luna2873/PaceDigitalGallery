<?php
App::uses('AppController', 'Controller');
/**
 * EvtYears Controller
 *
 * @property EvtYear $EvtYear
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EvtYearsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('index','view');
	}

	public function index() {
		$this->EvtYear->recursive = 0;
		$this->set('evtYears', $this->Paginator->paginate());
	}

	public function view($id = null){
		if (!$this->EvtYear->exists($id)) {
			throw new NotFoundException(__('Invalid evt year'));
		}
		$options = array('conditions' => array('EvtYear.' . $this->EvtYear->primaryKey => $id));
		$this->set('evtYear', $this->EvtYear->find('first', $options));
		$this->set('i',$i=1);

	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->EvtYear->recursive = 0;
		$this->set('evtYears', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->EvtYear->exists($id)) {
			throw new NotFoundException(__('Invalid evt year'));
		}
		$options = array('conditions' => array('EvtYear.' . $this->EvtYear->primaryKey => $id));
		$this->set('evtYear', $this->EvtYear->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EvtYear->create();
			if ($this->EvtYear->save($this->request->data)) {
				$this->Session->setFlash(__('The evt year has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evt year could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->EvtYear->exists($id)) {
			throw new NotFoundException(__('Invalid evt year'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EvtYear->save($this->request->data)) {
				$this->Session->setFlash(__('The evt year has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The evt year could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EvtYear.' . $this->EvtYear->primaryKey => $id));
			$this->request->data = $this->EvtYear->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->EvtYear->id = $id;
		if (!$this->EvtYear->exists()) {
			throw new NotFoundException(__('Invalid evt year'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EvtYear->delete()) {
			$this->Session->setFlash(__('The evt year has been deleted.'));
		} else {
			$this->Session->setFlash(__('The evt year could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
