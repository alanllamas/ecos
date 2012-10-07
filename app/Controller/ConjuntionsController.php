<?php
App::uses('AppController', 'Controller');
/**
 * Conjuntions Controller
 *
 * @property Conjuntion $Conjuntion
 */
class ConjuntionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Conjuntion->recursive = 0;
		$this->set('conjuntions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Conjuntion->id = $id;
		if (!$this->Conjuntion->exists()) {
			throw new NotFoundException(__('Conjuncion invalida'));
		}
		$this->set('conjuntion', $this->Conjuntion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Conjuntion->create();
			if ($this->Conjuntion->save($this->request->data)) {
				$this->Session->setFlash(__('La conjuncion ha sido guardada'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La conjuncion no ha sido guardada, intentelo nuevamente'));
			}
		}
		$posts = $this->Conjuntion->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Conjuntion->id = $id;
		if (!$this->Conjuntion->exists()) {
			throw new NotFoundException(__('Conjuncion invalida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Conjuntion->save($this->request->data)) {
				$this->Session->setFlash(__('La conjuncion ha sido guardada'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La conjuncion no ha sido guardada, intentelo nuevamente'));
			}
		} else {
			$this->request->data = $this->Conjuntion->read(null, $id);
		}
		$posts = $this->Conjuntion->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Conjuntion->id = $id;
		if (!$this->Conjuntion->exists()) {
			throw new NotFoundException(__('Conjuncion invalida'));
		}
		if ($this->Conjuntion->delete()) {
			$this->Session->setFlash(__('Conjuncion eliminada'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Conjuncion no eliminada'));
		$this->redirect(array('action' => 'index'));
	}

	public function busqueda(){
		$this->layout = 'public';
	}
}
