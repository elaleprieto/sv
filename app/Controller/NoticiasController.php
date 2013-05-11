<?php
App::uses('AppController', 'Controller');
/**
 * Noticias Controller
 *
 * @property Noticia $Noticia
 */
class NoticiasController extends AppController {
	
	public $paginate = array(
        'limit' => 2,
    );
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}


/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Noticia->create();
			if ($this->Noticia->save($this->request->data)) {
				$this->Session->setFlash(__('The noticia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
			}
		}
		$this->set('users', $this->Noticia->User->find('list'));
	}
	
 /**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->layout = 'admin';
		$this->Noticia->recursive = 0;
		$this->paginate = array(
	        'limit' => 20
	    );
		$this->set('noticias', $this->paginate());
	}
	
/**
 * publish method
 *
 * @return void
 */
	public function admin_publish() {
		// $this->layout = 'ajax';
		$this->autoRender = FALSE;
		if($this->request->isPost() && isset($this->request->data['Noticia']['id']) && isset($this->request->data['Noticia']['published'])) {
			$this->Noticia->id = $this->request->data['Noticia']['id'];
			if($this->Noticia->saveField('published', $this->request->data['Noticia']['published'])) {
				return json_encode(TRUE);
			}
		}
		return json_encode(FALSE);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'default';
		$this->paginate = array(
	        'conditions' => array('Noticia.published'=>TRUE),
	        'limit' => 2
	    );
		$this->Noticia->recursive = 0;
		$this->set('noticias', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'default';
		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
		$this->set('noticia', $this->Noticia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	// public function _add() {
		// if ($this->request->is('post')) {
			// $this->Noticia->create();
			// if ($this->Noticia->save($this->request->data)) {
				// $this->Session->setFlash(__('The noticia has been saved'));
				// $this->redirect(array('action' => 'index'));
			// } else {
				// $this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
			// }
		// }
		// $this->set('users', $this->Noticia->User->find('list'));
	// }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function _edit($id = null) {
		// if (!$this->Noticia->exists($id)) {
			// throw new NotFoundException(__('Invalid noticia'));
		// }
		// if ($this->request->is('post') || $this->request->is('put')) {
			// if ($this->Noticia->save($this->request->data)) {
				// $this->Session->setFlash(__('The noticia has been saved'));
				// $this->redirect(array('action' => 'index'));
			// } else {
				// $this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
			// }
		// } else {
			// $options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
			// $this->request->data = $this->Noticia->find('first', $options);
		// }
	// }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function _delete($id = null) {
		// $this->Noticia->id = $id;
		// if (!$this->Noticia->exists()) {
			// throw new NotFoundException(__('Invalid noticia'));
		// }
		// $this->request->onlyAllow('post', 'delete');
		// if ($this->Noticia->delete()) {
			// $this->Session->setFlash(__('Noticia deleted'));
			// $this->redirect(array('action' => 'index'));
		// }
		// $this->Session->setFlash(__('Noticia was not deleted'));
		// $this->redirect(array('action' => 'index'));
	// }

}
