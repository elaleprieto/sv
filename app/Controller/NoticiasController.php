<?php
App::uses('AppController', 'Controller');
/**
 * Noticias Controller
 *
 * @property Noticia $Noticia
 */
class NoticiasController extends AppController {
	
	public $paginate = array(
        'limit' => 5,
        'order' => array(
            'Noticia.created' => 'DESC'
        )
    );
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view');
	}


/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$noticia = $this->request->data['Noticia'];
			$noticia['user_id'] = $this->Session->read('Auth.User.id');
			$noticia['foto'] = $this->_foto($noticia);
			$this->Noticia->create($noticia);
			if ($this->Noticia->save($noticia)) {
				// $this->Session->setFlash(__('The noticia has been saved'));
				$this->redirect(array('action' => 'index'));
			// } else {
				// $this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
			}
		}
		$this->set('users', $this->Noticia->User->find('list'));
	}
	
	private function _foto($noticia) {
		if(!isset($noticia['archivo']['name'])) {
			return null;
		}
		
		# Obtengo el nombre del archivo
		$nombreArchivo = $noticia['archivo']['name'];
		
		
		# Defino el directorio donde se va a subir la foto
		$uploaddir = IMAGES_URL . 'fotos/';
		
		# Defino la ruta completa
		$uploadfile = $uploaddir . $nombreArchivo;
		
		# Verifico la existencia de la foto
		if (!(file_exists($uploadfile . '.jpg') || file_exists($uploadfile . '.png'))) {
			# Si no existe en el directorio, la copio dentro del directorio
			if (!move_uploaded_file($noticia['archivo']['tmp_name'], $uploadfile)) {
				# Si hubo algún error subiendo el archivo, se retorna null
				return null;
			}
		}
		
		# Una vez que la foto ya se encuentra en el directorio,
		# se procede a actualizar el registro del artículo con la nueva foto.
		# Notar que si la foto ya existe, no se sube nuevamente sino que se utiliza la misma
		# e igualmente se actualiza el artículo con esa foto.
		return $nombreArchivo;
	}
	
/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->autoRender = FALSE;
		$this->Noticia->id = $id;
		// $this->Noticia->id = $this->request->data['id'];
		
		if (!$this->Noticia->exists()) {
			return json_encode(false);
			// throw new NotFoundException(__('Invalid noticia'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Noticia->delete()) {
			// $this->Session->setFlash(__('Noticia deleted'));
			// $this->redirect(array('action' => 'index'));
			return json_encode(true);
		} else {
			// $this->Session->setFlash(__('Noticia was not deleted'));
			$this->redirect(array('action' => 'index'));
			return json_encode(false);
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
		if (!$this->Noticia->exists($id)) {
			throw new NotFoundException(__('Invalid noticia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$noticia = $this->request->data['Noticia'];
			
			# Se verifica y se asigna la nueva foto si se modifica
			$foto = $this->_foto($noticia);
			if($foto != null) {
				$noticia['foto'] = $foto;
			}
			
			if ($this->Noticia->save($noticia)) {
				// $this->Session->setFlash(__('The noticia has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				// $this->Session->setFlash(__('The noticia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Noticia.' . $this->Noticia->primaryKey => $id));
			$this->request->data = $this->Noticia->find('first', $options);
		}
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
	        'limit' => 20,
	        'order' => array('Noticia.created' => 'DESC')
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
	        'limit' => 5,
	        'order' => array('Noticia.created' => 'DESC')
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
