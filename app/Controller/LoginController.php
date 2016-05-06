<?php

App::uses('BlowfishPasswordHasher', 'Controller\Component\Auth');

class LoginController extends AppController {

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index','init');
	}

	public $uses = ['User'];

	public function index() {
		if ($this->request->is('post')) {
			$data = $this->request->data;

				//var_dump($data);
				//exit;

			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Flash->set('IDとパスワードが一致しませんでした。');
			}
		}
	}
	public function init() {
		$hasher = new BlowfishPasswordHasher();
		$this->User->save([
			'username' => 'root',
			'password' => 'briedge_pass'
		]);
	}

}