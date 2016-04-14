<?php
class CandidatesController extends AppController{

	public $components=array('Paginator');

	public $Paginator=array(
		'limit'=>10,
		'order'=>array('id'=>'asc')
	);

	public function index(){
		$data=$this->request->data;
		$param = [];

		if(!empty($this->request->query)) {
			if($this->request->query['data']['Candidate']['salary']==2){
				$param['conditions']['salary <']
				=501;
			}else if($this->request->query['data']['Candidate']['salary']==3){
				$param['conditions']['salary between ? and ?']
				=[501,800];
			}else if($this->request->query['data']['Candidate']['salary']==4){
				$param['conditions']['salary between ? and ?']
				=[801,1000];
			}else if($this->request->query['data']['Candidate']['salary']==5){
				$param['conditions']['salary >']
				=1000;
			}
			
			if($this->request->query['search']){
				$param['conditions']['OR']['individual like']
				='%'.$this->request->query['search'].'%';
			}
			if($this->request->query['search']){
				$param['conditions']['OR']['username like']
				='%'.$this->request->query['search'].'%';
			}
			if($this->request->query['search']){
				$param['conditions']['OR']['remark like']
				='%'.$this->request->query['search'].'%';
			}
			if($this->request->query['search']){
				$param['conditions']['OR']['type like']
				='%'.$this->request->query['search'].'%';
			}
			if($this->request->query['data']['Candidate']['job_id'][0]){
				$param['conditions']['job_id']
				=$this->request->query['Candidate']['job_id'];
			}
		}
		//var_dump($this->request->query);
		//exit;

		$this->paginate = $param;

		$this->set('candidates',$this->paginate());
		
	}

	public function add(){
		if($this->request->is('post')){
			$this->Candidate->save($this->request->data);
			$this->Flash->set('保存に成功しました。');
			$this->redirect(['action'=>'index']);
		}
		$this->set('users',$this->Candidate->User->find('list',array(
			'fields' => array('User.username'))));
		$this->set('situations',$this->Candidate->Situation->find('list',array(
			'fields'=>array('Situation.type'))));
		$this->set('jobs',$this->Candidate->Job->find('list',array(
			'fields'=>array('Job.position'))));
	}

	public function edit($id){
		$candidate=$this->Candidate->findById($id);
		if($this->request->is(['post','put'])){
			$this->Candidate->id=$id;
			if($this->Candidate->save($this->request->data)){
				$this->Flash->set('保存に成功しました。');
				$this->redirect(['action'=>'index']);
			}
		}
		if(empty($this->request->data)){
			$this->request->data=$candidate;
		}
		$this->set('users',$this->Candidate->User->find('list',array(
			'fields' => array('User.username'))));
		$this->set('situations',$this->Candidate->Situation->find('list',array(
			'fields'=>array('Situation.type'))));
		$this->set('jobs',$this->Candidate->Job->find('list',array(
			'fields'=>array('Job.position'))));
	}

	public function delete($id){
		$this->Candidate->id=$id;
		$this->Candidate->delete();
		$this->Flash->set('データの削除が完了しました。');
		$this->redirect(['action'=>'index']);
	}

	public function view($id){
		$candidate=$this->Candidate->findById($id);
		$this->set('candidate',$candidate);
	}
}