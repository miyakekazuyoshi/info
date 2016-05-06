<?php
class PricesController extends AppController{

	public $uses=('Price');
	public function index(){
		$this->set('prices',$this->Price->find('all'));
	}

	public function add(){
		if($this->request->is('post'));
		if($this->Price->save($this->request->data)){
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
	}

	public function edit($id){
		$price=$this->Price->findById($id);
		if($this->request->is(['post','put'])){
			$this->Price->id=$id;
			if($this->Price->save($this->request->data)){
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
		if(empty($this->request->data)){
			$this->requeest->data=$price;
		}
	}
}