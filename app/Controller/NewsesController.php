<?php
App::uses('AppController', 'Controller');
/**
 * Newses Controller
 *
 * @property Newse $Newse
 * @property PaginatorComponent $Paginator
 */
class NewsesController extends AppController {

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
		$this->Newse->recursive = 0;
		$this->set('newses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Newse->exists($id)) {
			throw new NotFoundException(__('Invalid newse'));
		}
		$options = array('conditions' => array('Newse.' . $this->Newse->primaryKey => $id));
		$this->set('newse', $this->Newse->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Newse->create();
			if ($this->Newse->save($this->request->data)) {
				$this->Session->setFlash(__('The newse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newse could not be saved. Please, try again.'));
			}
		}
		$categoris = $this->Newse->Categori->find('list');
		$this->set(compact('categoris'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Newse->exists($id)) {
			throw new NotFoundException(__('Invalid newse'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Newse->save($this->request->data)) {
				$this->Session->setFlash(__('The newse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newse could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Newse.' . $this->Newse->primaryKey => $id));
			$this->request->data = $this->Newse->find('first', $options);
		}
		$categoris = $this->Newse->Categori->find('list');
		$this->set(compact('categoris'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Newse->id = $id;
		if (!$this->Newse->exists()) {
			throw new NotFoundException(__('Invalid newse'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Newse->delete()) {
			$this->Session->setFlash(__('The newse has been deleted.'));
		} else {
			$this->Session->setFlash(__('The newse could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
