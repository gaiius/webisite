<?php
App::uses('AppController', 'Controller');
/**
 * Produks Controller
 *
 * @property Produk $Produk
 * @property PaginatorComponent $Paginator
 */
class ProduksController extends AppController {

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
		$this->Produk->recursive = 0;
		$this->set('produks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Produk->exists($id)) {
			throw new NotFoundException(__('Invalid produk'));
		}
		$options = array('conditions' => array('Produk.' . $this->Produk->primaryKey => $id));
		$this->set('produk', $this->Produk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Produk->create();
			if ($this->Produk->save($this->request->data)) {
				$this->Session->setFlash(__('The produk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produk could not be saved. Please, try again.'));
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
		if (!$this->Produk->exists($id)) {
			throw new NotFoundException(__('Invalid produk'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produk->save($this->request->data)) {
				$this->Session->setFlash(__('The produk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The produk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Produk.' . $this->Produk->primaryKey => $id));
			$this->request->data = $this->Produk->find('first', $options);
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
		$this->Produk->id = $id;
		if (!$this->Produk->exists()) {
			throw new NotFoundException(__('Invalid produk'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produk->delete()) {
			$this->Session->setFlash(__('The produk has been deleted.'));
		} else {
			$this->Session->setFlash(__('The produk could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
