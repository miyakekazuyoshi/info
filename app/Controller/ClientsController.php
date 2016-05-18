<?php
class ClientsController extends AppController{

	public $components=array('Paginator');

	public $paginator=array(
		'limit'=>10,
		'order'=>array('id'=>'asc')
	);
	
	public function index() {
		$data = $this->request->data;
		$param = [];

		if(!empty($this->request->query)) {
			if($this->request->query['search']) {
				$param['conditions']['OR']['company like']
				='%'.$this->request->query['search'].'%';
			}
			if($this->request->query['search']) {
				$param['conditions']['OR']['username like']
				='%'.$this->request->query['search'].'%';
			}
			if($this->request->query['search']) {
				$param['conditions']['OR']['remark like']
				='%'.$this->request->query['search'].'%';
			}
			if($this->request->query['data']['Candidate']['user_id']) {
				$param['conditions']['user_id']
				=$this->request->query['data']['Candidate']['user_id'];
			}
		}
		//var_dump($this->request->query);
		//exit;
		
		$this->paginate = $param;
		$this->set('clients',$this->paginate());
	}
	public function add(){
		if($this->request->is('post')){
			$this->Client->save($this->request->data);
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'clients?search=&data%5BCandidate%5D%5Buser_id%5D%5B%5D']);
		}
		$this->set('users',$this->Client->User->find('list',array(
			'fields' => array('User.username'))));
	}

	public function edit($id){
		$client=$this->Client->findById($id);
		if($this->request->is(['post','put'])){
			$this->Client->id=$id;
			if($this->Client->save($this->request->data)){
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
		if(empty($this->request->data)){
			$this->request->data=$client;
		}
		$this->set('users',$this->Client->User->find('list',array(
			'fields' => array('User.username'))));
	}

	public function delete($id){
		$this->Client->id=$id;
		$this->Client->delete();
		$this->Flash->set('データの削除か完了しました。');
		$this->redirect(['action'=>'index']);
	}

	public function view($id){
		$client=$this->Client->findById($id);
		$this->set('client',$client);
	}

}