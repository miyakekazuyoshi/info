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
		$position=$this->Position->find('all');
		if($this->request->is('post')){
			$this->Position->id=$id;
			if($this->Position->save($this->request->data)){
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
		if(empty($this->request->data)){
			$this->request->data=$position;
		}
	}

	public function delete(){
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