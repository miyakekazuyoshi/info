<?php
class SituationsController extends AppController{

	public function index(){
		$this->set('situations',$this->Situation->find('all'));
	}

	public function add(){
		if($this->request->is('post'));

		if($this->Situation->save($this->request->data)){
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
	}
}