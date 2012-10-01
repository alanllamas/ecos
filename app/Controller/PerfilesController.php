<?php
App::uses('AppController', 'Controller');
/**
 * Perfiles Controller
 *
 * @property Perfile $Perfile
 */
class PerfilesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Perfile->recursive = 0;
		$this->set('perfiles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Perfile->id = $id;
		if (!$this->Perfile->exists()) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		$this->set('perfile', $this->Perfile->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Perfile->create();
			if ($this->Perfile->save($this->request->data)) {
				$this->Session->setFlash(__('The perfile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The perfile could not be saved. Please, try again.'));
			}
		}
		$users = $this->Perfile->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Perfile->id = $id;
		if (!$this->Perfile->exists()) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Perfile->save($this->request->data)) {
				$this->Session->setFlash(__('The perfile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The perfile could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Perfile->read(null, $id);
		}
		$users = $this->Perfile->User->find('list');
		$this->set(compact('users'));
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
		$this->Perfile->id = $id;
		if (!$this->Perfile->exists()) {
			throw new NotFoundException(__('Invalid perfile'));
		}
		if ($this->Perfile->delete()) {
			$this->Session->setFlash(__('Perfile deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Perfile was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
