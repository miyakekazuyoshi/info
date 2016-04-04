<?php
class JobsController extends AppController{

	public function index(){
		$this->set('jobs',$this->Job->find('all'));
	}

	public function add(){
		if($this->request->is('post'));

		if($this->Job->save($this->request->data)){
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);

		}
	}

	public function edit($id){
		$job=$this->Job->findById($id);
		if($this->request->is(['post','put'])){
			$this->Job->id=$id;
			if($this->Job->save($this->request->data)){
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
		if(empty($this->request->data)){
			$this->request->data=$job;
		}
	}
}