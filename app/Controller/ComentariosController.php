<?php
App::uses('AppController', 'Controller');
/**
 * Comentarios Controller
 *
 * @property Comentario $Comentario
 */
class ComentariosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comentario->recursive = 0;
		$this->set('comentarios', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario invalido'));
		}
		$this->set('comentario', $this->Comentario->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comentario->create();
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('El comentario ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El comentario no ha sido guardado, intentelo nuevamente'));
			}
		}
		$posts = $this->Comentario->Post->find('list');
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
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comentario->save($this->request->data)) {
				$this->Session->setFlash(__('El comentario ha sido guardado'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El comentario no ha sido guardado, intentelo nuevamente'));
			}
		} else {
			$this->request->data = $this->Comentario->read(null, $id);
		}
		$posts = $this->Comentario->Post->find('list');
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
		$this->Comentario->id = $id;
		if (!$this->Comentario->exists()) {
			throw new NotFoundException(__('Comentario invalido'));
		}
		if ($this->Comentario->delete()) {
			$this->Session->setFlash(__('Comentario eliminado'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El comentario no fue eliminado'));
		$this->redirect(array('action' => 'index'));
	}
}
