<?php
class SalarisController extends AppController{

	public function index(){
		$this->set('salaris',$this->Salary->find('all'));
	}

	public function add(){
		if($this->request->is('post'));

		if($this->Salary->save($this->request->data)){
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
	}

	public function edit($id){
		$salary=$this->Salary->findById($id);
		if($this->request->is(['post','put'])){
			$this->Salary->id=$id;
			if($this->Salary->save($thhis->request->data)){
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
		if(empty($this->request->data)){
			$this->request->data=$salary;
		}
	}
}