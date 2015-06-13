<?php
App::uses('AppController', 'Controller');
/**
 * AfterSales Controller
 *
 * @property AfterSale $AfterSale
 * @property PaginatorComponent $Paginator
 */
class AfterSalesController extends AppController {

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
		$this->AfterSale->recursive = 0;
		$this->set('afterSales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AfterSale->exists($id)) {
			throw new NotFoundException(__('Invalid after sale'));
		}
		$options = array('conditions' => array('AfterSale.' . $this->AfterSale->primaryKey => $id));
		$this->set('afterSale', $this->AfterSale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AfterSale->create();
			if ($this->AfterSale->save($this->request->data)) {
				$this->Session->setFlash(__('The after sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The after sale could not be saved. Please, try again.'));
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
		if (!$this->AfterSale->exists($id)) {
			throw new NotFoundException(__('Invalid after sale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AfterSale->save($this->request->data)) {
				$this->Session->setFlash(__('The after sale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The after sale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AfterSale.' . $this->AfterSale->primaryKey => $id));
			$this->request->data = $this->AfterSale->find('first', $options);
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
		$this->AfterSale->id = $id;
		if (!$this->AfterSale->exists()) {
			throw new NotFoundException(__('Invalid after sale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AfterSale->delete()) {
			$this->Session->setFlash(__('The after sale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The after sale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
