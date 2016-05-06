<?php
class PositionsController extends AppController{

	public function index(){
		$this->set('positions',$this->Position->find('all'));
	}

	public function add(){
		if($this->request->is('post')){
			$this->Position->save($this->request->data);
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
	}

	public function edit($id){
		$position=$this->Position->findById($id);
		if($this->request->is(['post','put'])){
			$this->Position->id=$id;
			if($this->Position->save($this->request->data)){
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
	}

	public function delete($id){
		$this->Position->id=$id;
		$this->Position->delete();
		$this->Flash->set('データの削除に成功しました。');
		$this->redirect(['action'=>'index']);
	}

	public function view(){
		$position=$this->Position->findByid($id);
		$this->set('position',$position);
	}
}