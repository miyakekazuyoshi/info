<?php
class StatusesController extends AppController{

	public function index(){
		$this->set('statuses',$this->Status->find('all'));
	}

	public function add(){
		if($this->request->is('post'));

		if($this->Status->save($this->request->data)){
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
	}
}