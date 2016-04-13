<?php
class ClientsController extends AppController{

	public $components=array('Paginator');

	public $paginator=array(
		'limit'=>10,
		'order'=>array('id'=>'asc')
	);
	
	public function index(){
		$data=$this->request->deta;
			if(!empty($this->request->query)) {
				$this->paginate=[
					'conditions'=>['OR'=>
						['company like'=>'%'.$this->request->query['search'].'%',
							'info like'=>'%'.$this->request->query['search'].'%',
							'username like'=>'%'.$this->request->query['search'].'%',
							'remark like'=>'%'.$this->request->query['search'].'%',
						],
					]
				];
			}
			//var_dump($this->request->query);
			//exit;
			$this->set('clients',$this->paginate());
			$this->set('company',$this->Client->find('list',array(
				'fields'=>array('id','company')
			)));
	}

	public function add(){
		if($this->request->is('post')){
			$this->Client->save($this->request->data);
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
		$this->set('users',$this->Client->User->find('list'));
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
		$this->set('users',$this->Client->User->find('list'));
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