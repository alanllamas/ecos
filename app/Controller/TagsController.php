<?php
App::uses('AppController', 'Controller');
/**
 * Tags Controller
 *
 * @property Tag $Tag
 */
class TagsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tag->recursive = 0;
		$this->set('tags', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Tag invalido'));
		}
		$this->set('tag', $this->Tag->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tag->create();
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('El tag ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tag no ha sido guardado, intentelo nuevamente'));
			}
		}
		$posts = $this->Tag->Post->find('list');
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
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Tag invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tag->save($this->request->data)) {
				$this->Session->setFlash(__('El tag ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El tag no ha sido guardado, intentelo nuevamente'));
			}
		} else {
			$this->request->data = $this->Tag->read(null, $id);
		}
		$posts = $this->Tag->Post->find('list');
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
		$this->Tag->id = $id;
		if (!$this->Tag->exists()) {
			throw new NotFoundException(__('Tag invalido'));
		}
		if ($this->Tag->delete()) {
			$this->Session->setFlash(__('Tag eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tag no eliminado'));
		$this->redirect(array('action' => 'index'));
	}
}
