<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 */
class PostsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Post invalido'));
		}
		$this->set('post', $this->Post->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('El post ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El post no ha sido guardado, intentelo nuevamente'));
			}
		}
		$categorias = $this->Post->Categoria->find('list');
		$users = $this->Post->User->find('list');
		$conjuntions = $this->Post->Conjuntion->find('list');
		$tags = $this->Post->Tag->find('list');
		$this->set(compact('categorias', 'users', 'conjuntions', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Post invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('El post ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El post no ha sido guardado, intentelo nuevamente'));
			}
		} else {
			$this->request->data = $this->Post->read(null, $id);
		}
		$categorias = $this->Post->Categoria->find('list');
		$users = $this->Post->User->find('list');
		$conjuntions = $this->Post->Conjuntion->find('list');
		$tags = $this->Post->Tag->find('list');
		$this->set(compact('categorias', 'users', 'conjuntions', 'tags'));
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Post invalido'));
		}
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('Post eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El post no ha sido eliminado'));
		$this->redirect(array('action' => 'index'));
	}
}
