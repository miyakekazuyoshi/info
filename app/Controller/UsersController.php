<?php

App::uses('BlowfishPasswordHasher', 'Controller\Component\Auth');

class UsersController extends AppController{

	public function index(){
		$this->set('users',$this->User->find('all'));
	}

	public function add(){
		if($this->request->is('post'));
		
		if($this->request->data['User']['password']) {
			$hasher = new BlowfishPasswordHasher();
			$this->request->data['User']['password'] = $hasher->hash($this->request->data['User']['password']);
		}
		if($this->User->save($this->request->data)){
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
	}

	public function edit($id){
		$user=$this->User->findById($id);
		if($this->request->is(['post'])){
			$this->User->id=$id;
			if ($this->request->data['User']['password']) {
				$hasher = new BlowfishPasswordHasher();
				$this->request->data['User']['password'] = $hasher->hash($this->request->data['User']['password']);
			}
			if($this->User->save($this->request->data)){
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
		if(empty($this->request->data)){
			$this->request->data=$user;
		}
	}

	public function view($id){
		$user=$this->User->findById($id);
		$this->set('user',$user);
	}

	public function delete($id){
		$this->User->id=$id;
		$this->User->delete();
		$this->Flash->set('データの削除に成功しました。');
		$this->redirect(['action'=>'index']);
	}
}