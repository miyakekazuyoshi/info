<?php

App::uses('BlowfishPasswordHasher', 'Controller\Component\Auth');

class LoginController extends AppController {

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}

	public $uses = ['User'];

	public function index() {
		if ($this->request->is('post')) {
			$data = $this->request->data;

				//var_dump($data);
				//exit;

			if ($this->Auth->login($data)) {
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Flash->set('IDとパスワードが一致しませんでした。');
			}
		}
	}
/*
	public function init() {
		$hasher = new BlowfishPasswordHasher();
		$this->User->save([
			'name' => 'ブライエッジ',
			'loginId' => 'briedge',
			'password' => $hasher->hash('briedge777')
		]);
	}*/

}